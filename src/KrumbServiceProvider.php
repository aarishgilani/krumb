<?php

namespace Aarish\Krumb;

use Roots\Acorn\ServiceProvider;

class KrumbServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('krumb', function () {
            return new Krumb(
                $this->app['config']->get('breadcrumb')
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../config/breadcrumb.php' => $this->app->configPath('breadcrumb.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/breadcrumb.php',
            'breadcrumb'
        );

        add_filter('after_setup_theme', function () {
            return $this->app->make('crumb');
        });
    }
}
