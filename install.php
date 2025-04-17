<?php

/**
 * Check if the current request is running in a test environment.
 *
 * Test environment is detected by:
 * - User agent containing "PostmanRuntime"
 * - Host is "localhost:8003"
 * - `debug=true` query string parameter
 *
 * @return bool True if running in test environment, false otherwise.
 */
function checkIfIsTestEnvironment()
{
    $postman = isset($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], "PostmanRuntime") !== false;
    $localhost = $_SERVER["HTTP_HOST"] === "localhost:8003";
    $debug = isset($_GET["debug"]) && $_GET["debug"] == "true";

    if ($postman || $localhost || $debug) {
        return true;
    }

    return false;
}

/**
 * Extract a ZIP archive to the given destination.
 *
 * @param string $file        Path to the ZIP file.
 * @param string $destination Directory where files should be extracted.
 *
 * @return bool True if extraction was successful, false otherwise.
 */
function unzip($file, $destination)
{
    $zip = new ZipArchive();
    $res = $zip->open($file);

    if ($res !== true) {
        return false;
    }

    $zip->extractTo($destination);
    $zip->close();
    return true;
}

/**
 * Delete all files and directories in the current directory,
 * except those listed in the exceptions array.
 *
 * @param array $exceptions List of filenames to exclude from deletion.
 *
 * @return void
 */
function deleteAllExcept(array $exceptions)
{
    $items = scandir(__DIR__);

    foreach ($items as $item) {
        if (in_array($item, array_merge(['.', '..'], $exceptions))) {
            continue;
        }

        $path = __DIR__ . DIRECTORY_SEPARATOR . $item;

        if (is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }
}

/**
 * Recursively delete a directory and all its contents.
 *
 * @param string $dir Path to the directory.
 *
 * @return void
 */
function deleteDirectory($dir)
{
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }

    rmdir($dir);
}

if (checkIfIsTestEnvironment()) {
    http_response_code(400);
    die("This is a test environment. Please use the production environment.");
}

$deployFile = "deploy.zip";
$installFile = "install.php";

if (!file_exists($deployFile)) {
    http_response_code(404);
    die("Deploy file not found.");
}

deleteAllExcept([$deployFile, $installFile]);

unzip($deployFile, "./");
unlink($deployFile);
unlink($installFile);
