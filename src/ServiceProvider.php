<?php

namespace elson2010\aliashelper;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/alias-helper.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('alias-helper.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'alias-helper'
        );

        /*
        $this->app->bind('alias-helper', function () {
            return new AliasHelper();
        });
        */
    }
}
