<?php

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\CookieConsent;

use Illuminate\Container\Container;

/**
 * Class Builder.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Builder
{
    /**
     * @var
     */
    private $config;

    /**
     * Builder constructor.
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->config = $app->config['cookie-consent'];
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function message($value)
    {
        $this->config['message'] = $value;

        return $this;
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function dismiss($value)
    {
        $this->config['dismiss'] = $value;

        return $this;
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function learnMore($value)
    {
        $this->config['learnMore'] = $value;

        return $this;
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function link($value)
    {
        $this->config['link'] = $value;

        return $this;
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function theme($value)
    {
        $this->config['theme'] = $value;

        return $this;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('cookie-consent::container', $this->config);
    }
}
