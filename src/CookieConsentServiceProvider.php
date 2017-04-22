<?php



declare(strict_types=1);



namespace BrianFaust\CookieConsent;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class CookieConsentServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishConfig();

        $this->publishViews();

        $this->loadViews();
    }

    /**
     * Register the application services.
     */
    public function register(): void
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
    public function provides(): array
    {
        return array_merge(parent::provides(), ['cookie-consent']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName(): string
    {
        return 'cookie-consent';
    }
}
