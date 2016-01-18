# Laravel Cookie Consent

## Installation

First, pull in the package through Composer.

```js
composer require draperstudio/laravel-cookie-consent:1.0.*@dev
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

```php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    DraperStudio\CookieConsent\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
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

```php
{!! cookie_consent() !!}
```

## License

Laravel Cookie Consent is licensed under [The MIT License (MIT)](LICENSE).
