<?php

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\CookieConsent\tests\Facades;

use BrianFaust\CookieConsent\Builder;
use BrianFaust\CookieConsent\Facades\CookieConsent;
use BrianFaust\Tests\CookieConsent\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

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
