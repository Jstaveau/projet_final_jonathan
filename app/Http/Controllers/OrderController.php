<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Mail\SendOrderMail;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin', ['except' => ['update']]);
        $this->middleware('auth');
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'address' => ['required'],
        ]);

        $order->validate = true;
        $order->command_number = rand(1000000, 9999999);
        $order->save();

        $billing = Auth::user()->billing;
        $billing->email = $request->email;
        $billing->name = $request->name;
        if ($request->phone) {
            $billing->phone = $request->phone;
        }
        if ($request->company_name) {
            $billing->company_name = $request->company_name;
        }
        $billing->country = $request->country;
        $billing->state = $request->state;
        $billing->city = $request->city;
        $billing->address = $request->address;
        $billing->save();
        $order_products = OrderProduct::where('order_id', $order->id)->get();
        $total = 0;
        foreach ($order_products as $order_product) {
            $total += $order_product->product->price * $order_product->amount;
        }

        $details = [
            'subject' => 'Order',
            'name' => Auth::user()->name,
            'products' => $order->product,
            'total' => $total,
            'address' => $billing->address,
        ];

        Mail::to(Auth::user()->email)->send(new OrderMail($details));

        return redirect('/orderDone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        $details = [
            'subject' => 'Commande en chemin',
            'name' => $order->user->billing->name,
            'products' => $order->product,
            'number' => $order->command_number,
            'address' => $order->user->billing->address,
        ];

        Mail::to('jonathan.staveau@outlook.com')->send(new SendOrderMail($details));
        return redirect()->back();
    }
}
