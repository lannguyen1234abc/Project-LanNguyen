<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use App\ProductType;
use App\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('customer.layout.header', function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer('customer.layout.header', function ($view) {
            if (Session::has('cart')) {
                $oldCart = Session::get('cart');
                $cart = new cart($oldCart);
                $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }
        });
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
