# Drago Simple Project

[English](readme.md) | Čeština

Základní projekt pro jednostránkové weby s Drago Simple a připraveným PHP serverem v Dockeru.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsimple-project.svg)](https://badge.fury.io/ph/drago-ex%2Fsimple-project)
[![Coding Style](https://github.com/drago-ex/simple-project/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/simple-project/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Composer
- Docker

## Instalace

```bash
composer create-project drago-ex/simple-project
```

## Použití

Spusťte PHP server a otevřete http://localhost:8080:

```bash
npm run docker:dev
```

Stránka je `app/Home.php` se šablonou `app/templates/Home.latte`; Latte engine a traity jsou
popsané v [README Drago Simple](https://github.com/drago-ex/simple).
