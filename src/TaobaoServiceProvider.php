<?php

namespace Nicelizhi\Taobao;

use Illuminate\Support\ServiceProvider;

class TaobaoServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Taobao $extension)
    {
        if (! Taobao::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'taobao');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/taobao')],
                'taobao'
            );
        }

        $this->app->booted(function () {
            Taobao::routes(__DIR__.'/../routes/web.php');
        });
    }
}