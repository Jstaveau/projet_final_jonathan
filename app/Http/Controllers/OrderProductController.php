<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class OrderProductController extends Controller
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
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $totalProducts = CartProduct::where('cart_id', $cart->id)->orderBy('id',  'desc')->get();
        if ($request->amount != null) {
            $i = 0;
            $newAmounts = explode(',', $request->amount);
            foreach ($totalProducts as $product) {
                $product->amount = $newAmounts[$i];
                $i++;
                $product->save();
            }
        }
        if ($cart->product->count() != 0) {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->total = $request->reduc;
            $order->save();
            $lastOrder = Order::orderBy('id', 'desc')->first();
            foreach ($totalProducts as $product) {
                $order = new OrderProduct();
                $order->amount = $product->amount;
                $order->product_id = $product->product_id;
                $order->order_id = $lastOrder->id;
                $order->save();
            }
        }


        CartProduct::where('cart_id', $cart->id)->orderBy('id',  'desc')->delete();

        return redirect('/checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function show(OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderProduct $orderProduct)
    {
        //
    }
}
