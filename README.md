# 🚀 PoC GitHub Actions CI pipeline for Laravel (PHP)

[![wakatime](https://wakatime.com/badge/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel.svg)](https://wakatime.com/badge/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)
[![GitHub license](https://img.shields.io/github/license/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)
[![GitHub last commit](https://img.shields.io/github/last-commit/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)

[![Build](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/build.yml/badge.svg)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/build.yml)
[![Deploy](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/deploy.yml/badge.svg)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/deploy.yml)
[![PHP Lint](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/php-lint.yml/badge.svg)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/php-lint.yml)

[![Maintainability](https://api.codeclimate.com/v1/badges/83c1d6f45041d9d67d30/maintainability)](https://codeclimate.com/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/83c1d6f45041d9d67d30/test_coverage)](https://codeclimate.com/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/test_coverage)
[![CodeFactor](https://www.codefactor.io/repository/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/badge)](https://www.codefactor.io/repository/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)

---

🔬 **Proof of Concept (PoC)** for using **GitHub Actions** with a **Laravel (PHP)** project to automate CI/CD processes — including building, testing, code quality analysis, and deployment via FTP/SFTP.

---

## 📦 What’s in the box?

This project demonstrates a full CI/CD workflow using GitHub Actions:

### ✅ CI - Continuous Integration

- 📥 **Checkout code** from the repository
- 🧰 **Set up environment**:
  - PHP
  - Composer
  - Java (required for SonarCloud Scanner)
- 💾 **Cache dependencies**:
  - Composer packages
  - SonarCloud binaries
- 🔨 **Build the project**
- 🧪 **Run tests**
- 🧹 **Static analysis & quality gates** using:
  - SonarCloud
  - Code Climate
  - Codecov
  - CodeFactor
  - Snyk
- 🕵️ **Lint PHP files** for syntax errors

### 🚀 CD - Continuous Deployment

- 📤 Upload built artifacts via **FTP/SFTP**
- 🔐 SSH into the remote server and **execute deployment commands**
- 📩 Optional: trigger manual approval for deployment (via `workflow_dispatch` or `environment protection rules`)

---

## 📝 Detailed guide

👉 Refer to the blog post for a deep dive into how this works:

> 📖 [**Using GitHub Actions to create a Laravel (PHP) pipeline. Build, test, and deploy!**](https://blog.guilhermebranco.com.br/using-github-actions-to-create-a-laravel-php-pipeline-build-test-and-deploy/)

---

## 📁 Repository structure

```
.github/
  workflows/
    build.yml        # Build & test workflow
    deploy.yml       # Deploy to (S)FTP server
    php-lint.yml     # Lint PHP files
.env.example         # Example environment file
composer.json        # Laravel dependencies
README.md            # This file
```

---

## ⚙️ Requirements

To replicate this setup, make sure you have:

- Laravel project setup with `composer install`
- (S)FTP credentials or SSH access to your server
- GitHub secrets configured:
  - `SFTP_HOST`, `SFTP_USERNAME`, `SFTP_PASSWORD`, etc.
- A basic understanding of GitHub Actions workflows

---

## ❤️ Contributing

This is a PoC, but feel free to fork, experiment, or suggest improvements via PRs or issues!

---

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
```
