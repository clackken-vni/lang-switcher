# This is my package lang-switcher

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vnideas/lang-switcher.svg?style=flat-square)](https://packagist.org/packages/vnideas/lang-switcher)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/vnideas/lang-switcher/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vnideas/lang-switcher/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/vnideas/lang-switcher/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/vnideas/lang-switcher/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vnideas/lang-switcher.svg?style=flat-square)](https://packagist.org/packages/vnideas/lang-switcher)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require vnideas/lang-switcher
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="lang-switcher-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lang-switcher-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lang-switcher-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$langSwitcher = new Vnideas\LangSwitcher();
echo $langSwitcher->echoPhrase('Hello, Vnideas!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Clackken](https://github.com/clackken-vni)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
