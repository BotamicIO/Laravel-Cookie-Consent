<?php

namespace BrianFaust\CookieConsent\Facades;

use Illuminate\Support\Facades\Facade;

class CookieConsent extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie-consent';
    }
}
