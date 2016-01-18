<?php

namespace DraperStudio\CookieConsent;

use Illuminate\Container\Container;

class Builder
{
    private $config;

    public function __construct(Container $app)
    {
        $this->config = $app['config']['cookie-consent'];
    }

    public function message($value)
    {
        $this->config['message'] = $value;

        return $this;
    }

    public function dismiss($value)
    {
        $this->config['dismiss'] = $value;

        return $this;
    }

    public function learnMore($value)
    {
        $this->config['learnMore'] = $value;

        return $this;
    }

    public function link($value)
    {
        $this->config['link'] = $value;

        return $this;
    }

    public function theme($value)
    {
        $this->config['theme'] = $value;

        return $this;
    }

    public function render()
    {
        return view('cookie-consent::container', $this->config);
    }
}
