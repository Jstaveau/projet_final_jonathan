<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $add = CartProduct::where('cart_id', Auth::user()->cart->id)->where('product_id', $request->product)->first();
            if ($add == null) {
                $add = new CartProduct();
                if ($request->qtybutton) {
                    $add->amount = $request->qtybutton;
                } else {
                    $add->amount = 1;
                }
                $add->cart_id = Auth::user()->cart->id;
                $add->product_id = $request->product;
            } else {
                $add->amount += $request->qtybutton;
                $add->cart_id = Auth::user()->cart->id;
                $add->product_id = $request->product;
            }
            $add->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CartProduct $cartProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CartProduct $cartProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartProduct $cartProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartProduct $cartProduct)
    {
        //
    }
}
