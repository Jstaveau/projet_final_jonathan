<?php

use App\Http\Controllers\NewsletterController;
use App\Models\Diapo;
use App\Models\Image;
use App\Models\Product;
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
    $latest = Product::latest()->first();
    $star = Product::where('star', true)->first();
    $carous = Diapo::all()->take(3);
    $featureds = Product::all()->random(5);
    return view('welcome', compact('star', 'latest', 'carous', 'featureds'));
});
Route::get('/products', function () {
    return view('pages.shopList');
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
