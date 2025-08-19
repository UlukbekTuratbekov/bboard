<?php

namespace App\Providers;

use App\Models\Bb;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected array $policies = [
        '\App\Models\Bb' => '\App\Policies\BbPolicy',
    ];
    /**
     * Register any application services.
     */


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
