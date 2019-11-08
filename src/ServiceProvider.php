<?php

namespace EmilMoe\LaravelBootstrapTemplates;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->addNamespace('EmiLMoe\LaravelBootstrapTemplates', __DIR__ .'/views');
    }
}
