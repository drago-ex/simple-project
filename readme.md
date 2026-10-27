# Drago Simple Project

Basic project for creating single-page sites with Drago Simple and a ready-to-use PHP Docker server.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsimple-project.svg)](https://badge.fury.io/ph/drago-ex%2Fsimple-project)
[![Coding Style](https://github.com/drago-ex/simple-project/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/simple-project/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Composer
- Docker

## Installation

```bash
composer create-project drago-ex/simple-project
```

## Usage

Start the PHP server and open http://localhost:8080:

```bash
npm run docker:dev
```

The page is `app/Home.php` with its template `app/templates/Home.latte`; the Latte engine and the traits are
described in the [Drago Simple README](https://github.com/drago-ex/simple).
