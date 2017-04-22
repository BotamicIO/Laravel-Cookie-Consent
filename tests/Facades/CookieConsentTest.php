<?php



declare(strict_types=1);



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
