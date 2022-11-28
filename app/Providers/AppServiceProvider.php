<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use function GuzzleHttp\Promise\task;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->share('global',11);
      View()->composer(['layouts.master'],function($view){
       $view->with('multi','多視圖變數');
      });
    }
}