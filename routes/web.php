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
Route::get('/', function () {
    $products = Product::paginate(6);
    return view ('.index',compact('products'));
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

Route::get('/product/edit', 'ProfileController@index')->name('profile.edit');
Route::get('users/index', 'UserController@index')->name('user.index');