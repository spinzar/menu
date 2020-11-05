# Menu and sidebar management package for Laravel

[![Version](https://poser.pugx.org/spinzar/menu/v/stable.svg)](https://github.com/spinzar/menu/releases)
![Downloads](https://poser.pugx.org/spinzar/menu/d/total.svg)
![Build Status](https://travis-ci.com/spinzar/menu.svg)
[![StyleCI](https://github.styleci.io/repos/310272296/shield?branch=main)](https://github.styleci.io/repos/310272296?branch=main)
[![Quality](https://scrutinizer-ci.com/g/spinzar/menu/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinzar/menu)
[![License](https://poser.pugx.org/spinzar/menu/license.svg)](LICENSE.md)

This package intends to create and manage menus and sidebars for your Laravel app. It ships with ready-to-go presenters and you can create your own ones.

## Getting Started

### 1. Install

Run the following command:

```bash
composer require spinzar/menu
```

### 2. Register

Service provider and facade will be registered automatically. If you want to register them manually in `config/app.php`:

```php
Spinzar\Menu\Facade::class,
Spinzar\Menu\Provider::class,
```

### 3. Publish

Publish config file.

```bash
php artisan vendor:publish --tag=menu
```

### 4. Configure

You can change the configuration from `config/menu.php` file

## Usage

Check out the [wiki](../wiki) about the usage and further documentation.

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Denis Duliçi](https://github.com/denisdulici)
- [Nicolas Widart](https://github.com/nwidart)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
