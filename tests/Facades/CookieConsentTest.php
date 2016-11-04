<?php

namespace BrianFaust\Tests\CookieConsent\Tests\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\CookieConsent\AbstractTestCase;
use BrianFaust\CookieConsent\Facades\CookieConsent;
use BrianFaust\CookieConsent\Builder;

class CookieConsentTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'cookie-consent';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return CookieConsent::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Builder::class;
    }
}
