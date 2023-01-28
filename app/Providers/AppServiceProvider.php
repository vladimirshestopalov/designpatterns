<?php

namespace App\Providers;

use App\DesignPatterns\Structural\Proxy\Contracts\productRepositoryInterface;
use App\DesignPatterns\Structural\Proxy\Repositories\productRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public $bindings=[
        productRepositoryInterface::class=>productRepositoryImpl::class
    ];
    public function register()
    {

//        $this->app->bind(productRepositoryInterface::class, function ($app) {
//            return new productRepositoryImpl();
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
