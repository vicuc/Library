<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use App\Models\Chude;
use App\Models\Nxb;
use App\Models\Tacgia;



use Cart;


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
        Schema::defaultStringLength(191);

        View::composer('*', function ($view){
            view()->share(['data2' => Cart::content()]);
        });

        View::composer('*', function ($view){
            $chude = Chude::all()->take(4);
            $nxb = Nxb::all()->take(6);
            $tacgia = Tacgia::all()->take(6);
            view()->share(['chude' => $chude, 'nxb' => $nxb, 'tacgia' => $tacgia ]);
        });
    }
}
