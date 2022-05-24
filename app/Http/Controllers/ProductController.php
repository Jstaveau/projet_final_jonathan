<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $all_categories = Category::all();    $banner = Banner::where('id', 1)->first(); // banner img
    //search bar
    $search = $request->input('search'); //input content
    if ($search != '') {
        $category_id = Category::where('name', 'LIKE', "%{$search}")->first(); //to get the category id for the query builder
        if ($category_id) { //prevent error if no category selected
            $products = Product::where('name', 'LIKE', "%{$search}")->orWhere('category_id', $category_id->id)->orderBy('id', 'desc')->paginate(6);
            $lists = Product::where('name', 'LIKE', "%{$search}")->orWhere('category_id', $category_id->id)->orderBy('id', 'desc')->paginate(5);
        } else {
            $products = Product::where('name', 'LIKE', "%{$search}")->paginate(6);
            $lists = Product::where('name', 'LIKE', "%{$search}")->paginate(5);
        }
    } else {
        $products = Product::orderBy('id', 'desc')->paginate(6); //grid products
        $lists = Product::orderBy('id', 'desc')->paginate(5); //list products
    }
    return view('pages.shopList', compact('banner', 'products', 'lists', 'all_categories'));
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $reviews = Review::where('product_id', $product->id)->orderBy('id', 'desc')->get();
        $banner = Banner::where('id', 10)->first();
        return view('pages.showProduct', compact('product', 'banner', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
