<?php

namespace BrianFaust\CookieConsent;

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
        $this->config = array_filter($app->config['cookie-consent']);
        $this->config['content'] = array_filter($this->config['content']);

        if (empty($this->config['content'])) {
            unset($this->config['content']);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('cookie-consent::container', ['config' => $this->config]);
    }
}
