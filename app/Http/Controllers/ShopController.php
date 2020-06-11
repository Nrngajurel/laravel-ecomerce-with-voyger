<?php

namespace Nrn\Http\Controllers;

use Nrn\Product;
use Nrn\Repos\ProductRepository;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductRepository $repository)
    {
        if (request()->category){
            $products = Product::with('catagories')->whereHas('catagories', function ($query){
                $query->where('slug',request()->category);
            })->latest()->paginate(3);
            $categoryName= request()->category;
        }else {
            $products = $repository->search(['sort'=>'newest'])->getData();
            $categoryName= 'Features Items';

        }
        return view('public.shop',compact('products','categoryName'));
    }



    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $product= Product::where('slug',$slug)->firstOrFail();
        return view('public.Product',compact('product'));
    }

}
