<?php

namespace DraperStudio\CookieConsent\Facades;

use Illuminate\Support\Facades\Facade;

class CookieConsent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cookie-consent';
    }
}
