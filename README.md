# Di Helper

[![Build Status](https://travis-ci.org/elson2010/di-helper.svg?branch=master)](https://travis-ci.org/elson2010/di-helper)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/elson2010/di-helper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/elson2010/di-helper/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/elson2010/di-helper/badge.svg?branch=master)](https://coveralls.io/github/elson2010/di-helper?branch=master)

[![Packagist](https://img.shields.io/packagist/v/elson2010/di-helper.svg)](https://packagist.org/packages/elson2010/di-helper)
[![Packagist](https://poser.pugx.org/elson2010/di-helper/d/total.svg)](https://packagist.org/packages/elson2010/di-helper)
[![Packagist](https://img.shields.io/packagist/l/elson2010/di-helper.svg)](https://packagist.org/packages/elson2010/di-helper)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require elson2010/di-helper
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
elson2010\di-helper\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
elson2010\di-helper\Facades\DIHelper::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="elson2010\di-helper\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email
instead of using the issue tracker.

## Credits

- [](https://github.com/elson2010/di-helper)
- [All contributors](https://github.com/elson2010/di-helper/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
