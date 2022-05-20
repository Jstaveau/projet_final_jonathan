<?php

use App\Http\Controllers\NewsletterController;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Diapo;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $latest = Product::latest()->first(); //last product
    $star = Product::where('star', true)->first(); //star product
    $firstCarou = Diapo::where('first', true)->first(); //image selected as first for carousel
    $carous = Diapo::where('first', false)->inRandomOrder()->limit(2)->get(); //2 others images for the carousel
    $featureds = Product::all()->random(5); //5 random products for the section featured products
    $articles = Article::all()->take(2); //2 last articles
    return view('welcome', compact('star', 'latest', 'carous', 'featureds', 'articles', 'firstCarou'));
});
Route::get('/products', function () {
    $banner = Banner::where('id', 1)->first();
    $grid = true;
    $products = Product::orderBy('id', 'desc')->paginate(6);
    $lists = Product::orderBy('id', 'desc')->paginate(5);
    return view('pages.shopList', compact('banner', 'products', 'lists'));
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/about-us', function () {
    return view('pages.aboutUs');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/account', function () {
    $user = Auth::user();
    $billing = $user->billing;
    return view('pages.myAccount', compact('user', 'billing'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('newsletter', NewsletterController::class);

require __DIR__.'/auth.php';
