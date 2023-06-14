<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\type_product;
use App\Models\product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()-> composer('header', function($view){
            $loai_sp = type_product::all();
            $view ->with('loai_sp', $loai_sp);
        });
        view()->composer('header', function ($view) {										
            if (Session('cart')) {										
              $oldCart = Session::get('cart');										
              $cart = new Cart($oldCart);										
              $view->with(['cart' => Session::get('cart'), 										
                          'product_cart' => $cart->items, 										
                          'totalPrice' => $cart->totalPrice, 										
                          'totalQty' => $cart->totalQty										
                          ]);										
                          }										
          });			
        view()-> composer('page.product_type', function($view){
            $product_new = product::where('new',1)-> orderBy('id','DESC')->skip(1)->take(8)-> get();
            $view -> with('product_new',$product_new);        });
        
    }
   							
                                                
        
}
