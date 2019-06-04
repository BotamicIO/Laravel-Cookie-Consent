<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Tests\CookieConsent\tests\Facades;

use Artisanry\CookieConsent\Builder;
use Artisanry\CookieConsent\Facades\CookieConsent;
use Artisanry\Tests\CookieConsent\AbstractTestCase;
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
