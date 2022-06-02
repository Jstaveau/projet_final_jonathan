<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BillingAddressController;
use App\Http\Controllers\CartArticleController;
use App\Http\Controllers\CartProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResizeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamsController;
use App\Models\About;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Banner;
use App\Models\BillingAddress;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Category;
use App\Models\Diapo;
use App\Models\Image;
use App\Models\Info;
use App\Models\Mail;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Teams;
use App\Models\User;
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
    $latest = Product::orderBy('id', 'desc')->first(); //last product
    $star = Product::where('star', true)->first(); //star product
    if ($star == null) {
        $star = Product::first();
    }
    $firstCarou = Diapo::where('first', true)->first(); //image selected as first for carousel
    $carous = Diapo::where('first', false)->inRandomOrder()->limit(2)->get(); //2 others images for the carousel
    $featureds = Product::all()->random(5); //5 random products for the section featured products
    $articles = Article::orderBy('id', 'desc')->limit(2)->get(); //2 last articles
    return view('welcome', compact('star', 'latest', 'carous', 'featureds', 'articles', 'firstCarou'));
});
Route::get('/product/tri/{category}', function ($category) { // category filter
    $all_categories = Category::all();
    $banner = Banner::where('id', 1)->first(); // banner img
    $category_id = Category::where('name', $category)->first();
    $products = Product::where('category_id', $category_id->id)->orderBy('id', 'desc')->paginate(6);
    $lists = Product::where('category_id', $category_id->id)->orderBy('id', 'desc')->paginate(5);
    return view('pages.shopList', compact('banner', 'products', 'lists', 'all_categories'));
});
Route::get('/product/size/{size}', function ($size) { //size filter
    $banner = Banner::where('id', 1)->first(); // banner img
    $all_categories = Category::all();
    $products = Product::where('size', $size)->orderBy('id', 'desc')->paginate(6);
    $lists = Product::where('size', $size)->orderBy('id', 'desc')->paginate(5);
    return view('pages.shopList', compact('banner', 'products', 'lists', 'all_categories'));
});
Route::get('/cart', function () {
    $banner = Banner::where('id', 8)->first();
    $cart = Cart::where('user_id', Auth::user()->id)->first();
    $totalProducts = CartProduct::where('cart_id', $cart->id)->orderBy('id',  'desc')->get();
    $total = 0;
    foreach ($totalProducts as $totalProduct) {
        if ($totalProduct->product->discount != null) {
            $total += $totalProduct->product->price * (1 - $totalProduct->product->discount / 100) * $totalProduct->amount;
        } else {
            $total += $totalProduct->product->price * $totalProduct->amount;
        }
    }
    return view('pages.cart', compact('banner', 'totalProducts', 'total'));
});
Route::get('/checkout', function () {
    $banner = Banner::where('id', 6)->first();
    return view('pages.checkout', compact('banner'));
});
Route::get('/account', function () {
    $banner = Banner::where('id', 5)->first();
    $user = Auth::user();
    $billing = $user->billing;
    return view('pages.myAccount', compact('user', 'billing', 'banner'));
})->middleware(['auth']);

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/products', function () {
    $products = Product::all();
    return view('pages.pagesDashboard.products', compact('products'));
})->middleware(['auth']);

Route::get('/dashboard/articles', function () {
    $articles = Article::all();
    return view('pages.pagesDashboard.articles', compact('articles'));
})->middleware(['auth']);

Route::get('/dashboard/categories', function () {
    $categories = Category::all();
    $article_categories = ArticleCategory::all();
    $tags = Tag::all();
    return view('pages.pagesDashboard.catTag', compact('categories', 'article_categories', 'tags'));
})->middleware(['auth']);

Route::get('/dashboard/teams', function () {
    $teams = Teams::all();
    return view('pages.pagesDashboard.team', compact('teams'));
})->middleware(['auth']);

Route::get('/dashboard/mails', function () {
    $mails = Mail::where('archived', false)->orderBy('id', 'desc')->get();
    return view('pages.pagesDashboard.mailBox', compact('mails'));
})->middleware(['auth']);

Route::get('/dashboard/infos', function () {
    $about = About::first();
    $info = Info::first();
    $banners = Banner::all();
    return view('pages.pagesDashboard.infos', compact('info', 'banners', 'about'));
})->middleware(['auth']);

Route::get('/dashboard/archived', function () {
    $mails = Mail::where('archived', true)->orderBy('id', 'desc')->get();
    return view('pages.pagesDashboard.mailBox', compact('mails'));
})->middleware(['auth']);

Route::get('/user/{id}/edit', [RegisteredUserController::class, 'edit']);
Route::put('/user/{id}/update', [RegisteredUserController::class, 'update']);

Route::get('/writeanswer/{id}', [MailController::class, 'writeAnswer']);
Route::put('/sendanswer/{id}', [MailController::class, 'sendAnswer']);

Route::put('/image/{id}/reset', [ImageController::class, 'reset_product']);
Route::put('/product/{id}/details', [ProductController::class, 'details']);

Route::resource('newsletter', NewsletterController::class);
Route::resource('cartProduct', CartProductController::class);
Route::resource('billing', BillingAddressController::class);
Route::resource('product', ProductController::class);
Route::resource('article', ArticleController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', InfoController::class);
Route::resource('review', ReviewController::class);
Route::resource('comment', CommentController::class);
Route::resource('article-category', ArticleCategoryController::class);
Route::resource('tag', TagController::class);
Route::resource('banner', BannerController::class);
Route::resource('mail', MailController::class);
Route::resource('team', TeamsController::class);
Route::resource('image', ImageController::class);
Route::resource('category', CategoryController::class);
Route::resource('article_category', ArticleCategoryController::class);
Route::resource('info', InfoController::class);

Route::get('/file-resize', [ResizeController::class, 'index']);
Route::post('/resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');

require __DIR__ . '/auth.php';
