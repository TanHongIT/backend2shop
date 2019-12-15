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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/product', 'ProductController')->middleware('admin');
//tạo route product chứa id sản phẩm và slug(tên sản phẩm)
Route::get('/product/{id}/{slug?}', 'ProductController@show')->name('product.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//tạo route cho admin và customer gọi đến middleware
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');
//tạo route cho coment
Route::resource('/comment', 'CommentController');

//tạo route cho category
Route::resource('/category', 'CategoryController');

//tạo route cho trang ajax
Route::get('/productAjax/{id}', 'ProductController@productAjax')->name('product.productAjax');