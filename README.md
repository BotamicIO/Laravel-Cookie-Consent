# Laravel CookieConsent

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-cookie-consent
```

Add the service provider to `config/app.php` in the `providers` array.

``` php
BrianFaust\CookieConsent\CookieConsentServiceProvider::class
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in `config/app.php` to your aliases array.

``` php
'aliases' => [
    'CookieConsent' => BrianFaust\CookieConsent\Facades\CookieConsent```

## Configuration

Laravel Cookie Consent supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="BrianFaust\CookieConsent\ServiceProvider"
```

This will create a `config/cookie-consent.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

##### Render the Cookie Constent "Container"

``` php
{!! CookieConsent::render() !!}
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
