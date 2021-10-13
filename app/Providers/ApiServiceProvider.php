<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * @example How to use ApiServiceProvider
         *
         *  $this->app->singleton(SomeExternalApiClient::class, function ($app) {
         *      return new SomeExternalApiClient([
         *          'base_uri' => $app->config->get('services.some-external-api-url'),
         *          'headers' => [
         *              'Accept' => 'application/json',
         *          ]
         *      ]);
         *  });
         */
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
