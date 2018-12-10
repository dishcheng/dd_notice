<?php

namespace DishCheng\DdNotice;

use Illuminate\Support\ServiceProvider;

class DdNoticeProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config' => config_path(),],
            'dd_notice'
        );
    }

    public function register()
    {
        $this->app->bind(DdNotice::class, function () {
            return new DdNotice();
        });
    }
}
