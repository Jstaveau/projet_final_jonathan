<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\BillingAddress;
use App\Models\BillingAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillingAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin'], ['except' => ['index', 'show']]);
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
     * @param  \App\Models\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function show(BillingAddress $billingAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingAddress $billingAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required'],
            'email' => ['required', 'email'],
        ]);

        $billingAddress = BillingAddress::find($id);
        $billingAddress->name = $request->name;
        $billingAddress->address = $request->address;
        $billingAddress->phone = $request->phone;
        $billingAddress->company_name = $request->company_name;
        $billingAddress->country = $request->country;
        $billingAddress->state = $request->state;
        $billingAddress->city = $request->city;
        $billingAddress->email = $request->email;
        $billingAddress->user_id = Auth::user()->id;
        $billingAddress->save();
        return redirect()->back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingAddress $billingAddress)
    {
        //
    }
}
