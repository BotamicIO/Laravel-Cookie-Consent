<?php

namespace BrianFaust\CookieConsent;

use BrianFaust\ServiceProvider\ServiceProvider;

class CookieConsentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishConfig();

        $this->publishViews();

        $this->loadViews();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->mergeConfig();

        $this->app->singleton('cookie-consent', function ($app) {
            return new Builder($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['cookie-consent']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'cookie-consent';
    }
}
