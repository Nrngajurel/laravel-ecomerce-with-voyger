<?php

namespace Nrn\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nrn\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        dd(Cart::content());


        return view('public.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $quantity= $request->quantity ?? 1;

        Cart::add($request->id, $request->name, $quantity, $request->price)
            ->associate(Product::class);
        return back()->with(['message'=>'item added successfully']);
//        return response()->json('item added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
//        dd($request);
        Cart::update($id, ['qty' => $request->qty]);
        Session::flash('message', 'Quantity is updated Successfully');
        return response()->json('Quantity is updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Cart::remove($id);
        Session::flash('message', 'item is remove');
//        return response()->json(['message'=>'item is remove']);
        return back()->with('message','item is remove');
    }
    public function empty()
    {
        Cart::destroy();
        return back()->with('message','Cart Cleared!');
    }
}
