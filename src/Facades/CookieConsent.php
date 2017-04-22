<?php



declare(strict_types=1);



namespace BrianFaust\CookieConsent\Facades;

use Illuminate\Support\Facades\Facade;

class CookieConsent extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'cookie-consent';
    }
}
