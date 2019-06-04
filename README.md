# Laravel CookieConsent

[![Build Status](https://img.shields.io/travis/artisanry/Cookie-Consent/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Cookie-Consent)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/cookie-consent.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Cookie-Consent.svg?style=flat-square)](https://github.com/artisanry/Cookie-Consent/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Cookie-Consent.svg?style=flat-square)](https://packagist.org/packages/artisanry/Cookie-Consent)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/cookie-consent
```

## Configuration

Laravel Cookie Consent supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Artisanry\CookieConsent\ServiceProvider"
```

This will create a `config/cookie-consent.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

##### Render the Cookie Constent "Container"

``` php
{!! CookieConsent::render() !!}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
