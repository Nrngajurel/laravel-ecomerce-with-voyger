<?php

namespace App\Providers;

use App\Brand;
use App\Catagory;
use App\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('public.inc.sidebar.brands', function ($view) {
            $productBrands=Cache::remember('productBrands', now()->addSecond(20), function (){
                return Brand::all();
            });
            $view->with('productBrands',$productBrands);
        });
        View::composer('public.inc.sidebar.category', function ($view) {
            $productCatagories=Cache::remember('productCatagories', now()->addSecond(20), function (){
               return Catagory::all();
            });
            $view->with('productCatagories',$productCatagories);
        });
        View::composer('public.inc.Recommended', function ($view) {
            $recommendedProducts = Cache::remember('recommendedProducts', now()->addSecond(20),function (){
               return Product::inRandomOrder()->take(3)->get();
            });

            $view->with('recommendedProducts',$recommendedProducts);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
