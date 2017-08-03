<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CookieConsent;

use Illuminate\View\View;
use Illuminate\Container\Container;

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
        $this->config = array_filter($app->config['laravel-cookie-consent']);
        $this->config['content'] = array_filter($this->config['content']);

        if (empty($this->config['content'])) {
            unset($this->config['content']);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render(): View
    {
        return view('cookie-consent::container', ['config' => $this->config]);
    }
}
