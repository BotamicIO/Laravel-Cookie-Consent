# Laravel CookieConsent

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require draperstudio/laravel-cookie-consent
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

``` php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    DraperStudio\CookieConsent\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

``` php
'aliases' => [
    // ... Illuminate Facades
    'CookieConsent' => DraperStudio\CookieConsent\Facades\CookieConsent::class
];
```

## Configuration

Laravel Cookie Consent supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="DraperStudio\CookieConsent\ServiceProvider"
```

This will create a `config/cookie-consent.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

##### Render the Cookie Constent "Container"

``` php
{!! cookie_consent() !!}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/laravel-cookie-consent.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Laravel-Cookie-Consent/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/laravel-cookie-consent.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/laravel-cookie-consent.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/laravel-cookie-consent.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/laravel-cookie-consent
[link-travis]: https://travis-ci.org/DraperStudio/Laravel-Cookie-Consent
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/laravel-cookie-consent/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/laravel-cookie-consent
[link-downloads]: https://packagist.org/packages/DraperStudio/laravel-cookie-consent
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
