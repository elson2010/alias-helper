# Alias Helper For laravel


Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require elson2010/alias-helper
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
elson2010\aliashelper\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
elson2010\aliashelper\Facades\AliasHelper::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="elson2010\aliashelper\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email
instead of using the issue tracker.

## Credits

- [](https://github.com/elson2010/alias-helper)
- [All contributors](https://github.com/elson2010/alias-helper/graphs/contributors)

