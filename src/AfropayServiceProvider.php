<?php
namespace Pranta\AfropayPaymentGateway;

use Illuminate\Support\ServiceProvider;

class AfropayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('afropay', function () {
            return new Afropay();
        });

        $this->mergeConfigFrom(__DIR__ . '/Config/afropay.php', 'afropay');
    }

    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__ . '/Config/afropay.php' => config_path('afropay.php'),
        ], 'config');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
