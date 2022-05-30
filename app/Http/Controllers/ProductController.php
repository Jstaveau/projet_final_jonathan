<?php

namespace App\Http\Controllers;

use App\Mail\NewProduct;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Newsletter;
use App\Models\Pp;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Jona;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $all_categories = Category::all();
        $banner = Banner::where('id', 1)->first(); // banner img
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
        $categories = Category::all();
        return view('pages.pagesDashboard.store.storeProduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->size = $request->size;
        $product->stock = $request->stock;
        $product->price = $request->price;
        if ($request->discount == 0) {
            $product->discount = null;
        } else {
            $product->discount = $request->discount;
        }
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->new) {
            $product->new = true;
        } else {
            $product->new = false;
        }
        $product->save();

        if ($request->file) {

            $pp = new Pp();
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/img/images_site/450x375');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(450, 375, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $destinationPath = public_path('/img/images_site/370x450');
            $imgFile->resize(370, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $destinationPath = public_path('/img/images_site/70x83');
            $imgFile->resize(70, 83, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');

            $destinationPath = public_path('/img/images_site/270x270');
            $imgFile->resize(270, 270, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');

            $pp->src = $input['file'];
            $pp->name = $input['file'];
            $pp->product_id = $product->id;
            $pp->save();
        }

        //mail newsletter for new product
        $newsletterAbos = Newsletter::all();
        $details = [
            'subject' => 'New product available',
            'message' => "Name : ".$request->name.'
                        Price : '.$request->price,
        ];
        foreach ($newsletterAbos as $newsletterAbo) {
            Mail::to($newsletterAbo->email)->send(new NewProduct($details));
        }

        return redirect()->back();
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
        $categories = Category::all();
        $images = Image::where('product_id', $product->id)->get();
        return view('pages.pagesDashboard.edit.editProduct', compact('product', 'images', 'categories'));
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

        if ($request->file) {

            $current_pp = Pp::where('product_id', $product->id)->first();
            $current_pp->product_id = null;
            $current_pp->save();

            $pp = new Pp();
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/img/images_site/450x375');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(450, 375, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $destinationPath = public_path('/img/images_site/370x450');
            $imgFile->resize(370, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $destinationPath = public_path('/img/images_site/70x83');
            $imgFile->resize(70, 83, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');

            $destinationPath = public_path('/img/images_site/270x270');
            $imgFile->resize(270, 270, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');

            $pp->src = $input['file'];
            $pp->name = $input['file'];
            $pp->product_id = $product->id;
            $pp->save();
        }

        $product->name = $request->name;
        $product->size = $request->size;
        $product->stock = $request->stock;
        $product->price = $request->price;
        if ($request->discount == 0) {
            $product->discount = null;
        } else {
            $product->discount = $request->discount;
        }
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->new) {
            $product->new = true;
        } else {
            $product->new = false;
        }
        $product->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
