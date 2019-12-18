<?php
 
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
use App\Product;
use App\Slide;
Route::get('/', function () {
    $slide = Slide::all();
    $products = Product::paginate(6);
    $product_sale=Product::where('product_promotion_pricre','<>',0)->paginate(3);
    return view ('.index',compact('products','slide','product_sale'));
});

Route::resource('/product', 'ProductController')->middleware('admin');
Route::get('/product/{id}/{slug?}', 'ProductController@show')->name('product.show');
Route::get('/productAjax/{id}', 'ProductController@productAjax')->name('product.productAjax');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');

Route::resource('/comment', 'CommentController');
Route::resource('/category', 'CategoryController');


Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('/contact','CustomerController@getContact')->name('contact');
//cach 1
// Route::get('/about','HomeController@getAbout')->name('about');
//cach 2
Route::get('/about',[
    'as' => 'about',
    'uses' => 'CustomerController@getAbout'
]);
Route::get('dat-hang2',[
    'as' => 'dathang2',
    'uses' => 'CustomerController@postCheckout'
]);