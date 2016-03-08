<?php

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\CookieConsent\Tests\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use DraperStudio\Tests\CookieConsent\AbstractTestCase;
use DraperStudio\CookieConsent\Facades\CookieConsent;
use DraperStudio\CookieConsent\Builder;

/**
 * This is the facade test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
