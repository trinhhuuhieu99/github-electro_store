<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\ProductType;

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
        View::composer('nav', function ($view) {
            $mobile_type = ProductType::whereIn('id', [1, 2, 3])->get();
            $computer_type = ProductType::whereIn('id', [4, 5, 6])->get();
            $home_type = ProductType::whereIn('id', [7, 8, 9])->get();

            $view->with('mobile_type', $mobile_type)
                ->with('computer_type', $computer_type)
                ->with('home_type', $home_type);  
        });
    }
}
