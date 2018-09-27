<?php

namespace DtechBmi\BMI;

use Illuminate\Support\ServiceProvider;

class BMIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $package_name = 'bmi';

        $this->loadRoutesFrom(__DIR__ . '/Routes/routes.php');
        $this->loadViewsFrom(__DIR__ . '/Views', $package_name);

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/'.$package_name),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}