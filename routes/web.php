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
Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/product/{id}', 'ProductController@index')->name('product');

Route::get('/{category}', 'ShopController@category')->name('category');




