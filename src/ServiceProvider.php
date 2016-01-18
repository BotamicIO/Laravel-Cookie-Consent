<?php

namespace DraperStudio\CookieConsent;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'cookie-consent';

    public function boot()
    {
        $this->publishConfig()->publishViews()->loadViews();
    }

    public function register()
    {
        $this->setup(__DIR__)->mergeConfig();

        $this->app->singleton('cookie-consent', function ($app) {
            return new Builder($app);
        });
    }
}
