# PoC GitHub Actions CI pipeline Laravel (PHP)

[![wakatime](https://wakatime.com/badge/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel.svg)](https://wakatime.com/badge/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)
[![GitHub license](https://img.shields.io/github/license/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)
[![GitHub last commit](https://img.shields.io/github/last-commit/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)

[![Build](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/build.yml/badge.svg)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/build.yml)
[![Deploy](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/deploy.yml/badge.svg)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/deploy.yml)
[![PHP Lint](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/php-lint.yml/badge.svg)](https://github.com/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/actions/workflows/php-lint.yml)

[![Maintainability](https://api.codeclimate.com/v1/badges/83c1d6f45041d9d67d30/maintainability)](https://codeclimate.com/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/83c1d6f45041d9d67d30/test_coverage)](https://codeclimate.com/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/test_coverage)
[![CodeFactor](https://www.codefactor.io/repository/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel/badge)](https://www.codefactor.io/repository/github/GuilhermeStracini/POC-GHActions-CI-PHPLaravel)

🔬 PoC of a Laravel (PHP) project using GitHub Actions for pipelines

---

This repository is a playground/sandbox of a Laravel (PHP) project/solution using GitHub Actions to:

- GIT Checkout
- Configure environment (PHP, Composer, Java - for SonarCloud scanner)
- Cache dependencies (SonarCloud scanner and packages)
- Restore
- Build
- Test
- Code Quality & Metrics (Sonar Cloud, Codacy, Code Climate, Snyk, Codecov, CodeFactor)
- Request approval to publish/deploy
- Upload artifacts via FTP
- Login to SSH and execute commands

---
In this blog article [Using GitHub Actions to create a Laravel (PHP) pipeline. Build, test, and deploy!](https://blog.guilhermebranco.com.br/using-github-actions-to-create-a-laravel-php-pipeline-build-test-and-deploy/) I explain what is done in this repository.
