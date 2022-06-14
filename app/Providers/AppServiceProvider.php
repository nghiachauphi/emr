<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;

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
        view()->composer('*', function ($view)
        {
            $response = Http::accept('application/json')->withHeaders([
                'Authorization' => 'Bearer '.session('token')
            ])->get('http://103.162.31.19:1818/api/leo/user');

            $data = ($response->body());

            $view->with('data', $data );
        });
    }
}
