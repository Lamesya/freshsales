<?php

namespace Lamesya\Freshsales;

use Illuminate\Support\ServiceProvider;
use Lamesya\Freshsales\Exceptions\FreshsalesException;

class FreshsalesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->booting( function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias( 'freshsales', 'Lamesya\Freshsales\FreshsalesFacade' );
        } );

        $this->app->singleton(Freshsales::class, function ($app) {
            $apiKey = $app['config']->get('services.freshsales.key');
            $domain = $app['config']->get('services.freshsales.domain');

            if (! $apiKey) {
                throw new FreshsalesException('Freshsales was not configured in services.php configuration file.');
            }

            return new Freshsales($apiKey, $domain);
        });

        $this->app->alias(Freshsales::class, 'freshsales');
    }
 
    /**
     * Get the services provided by the provider.
     */
    public function provides()
    {
        return ['freshsales'];
    }
}