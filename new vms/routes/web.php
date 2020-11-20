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

Route::post('/ussd', 'ussd\UssdController@ussdRequestHandler');

Route::view('/', 'site.pages.homepage');

Route::view('/about', 'site.web.about');
Route::view('/partners', 'site.web.partners');
Route::view('/support', 'site.web.support');
Route::view('/faqs', 'site.web.faqs');
Route::view('/partnering', 'site.web.bepartner');
Route::view('/distributor', 'site.web.distributor');
Route::view('/contact', 'site.web.contact');
Route::view('/blog', 'site.web.blog');

Route::view('/privacy', 'site.web.privacy');
Route::view('/subscribed', 'site.web.subscribed');
Route::view('/terms', 'site.web.terms'); 

Route::post('create','Support\maillistController@insert');

Route::post('supportrequest','Support\supportController@insert');

Route::get('/products', 'Site\FooterController@show')->name('products.show');

Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');

Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::get('/checkoutMpesa', 'Site\CheckoutController@getCheckoutMpesa')->name('checkout.mpesa');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
     Route::post('/checkout/orderbympesa', 'Site\CheckoutController@placeOrderbyMpesa')->name('checkout.place.orderbympesa');

    Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');

    Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');

    Route::get('profile','Site\cbc\userController@profile');
	Route::get('editProfile{id}','Site\cbc\userController@edits');
	Route::get('editProfile{id}','Site\cbc\userController@update');
	Route::get('edit-records','Site\cbc\AdminUpdateController@index');
	Route::get('edit{id}','Site\cbc\AdminUpdateController@show');
	Route::post('edit{id}','Site\cbc\AdminUpdateController@edit');

    Route::view('/home', 'site.cbc.home');
	Route::view('/pp1', 'site.cbc.pp1');
	Route::view('/pp1lang', 'site.cbc.pp1lang');
	Route::view('/pp1environ', 'site.cbc.pp1environ');
	Route::view('/pp1maths', 'site.cbc.pp1maths');
	Route::view('/pp1cre', 'site.cbc.pp1cre');

	Route::view('/pp2', 'site.cbc.pp2');
	Route::view('/pp2lang', 'site.cbc.pp2lang');
	Route::view('/pp2environ', 'site.cbc.pp2environ');
	Route::view('/pp2maths', 'site.cbc.pp2maths');
	Route::view('/pp2cre', 'site.cbc.pp2cre');

	Route::view('/g3', 'site.cbc.g3');
	Route::view('/g3eng', 'site.cbc.g3eng');
	Route::view('/g3environ', 'site.cbc.g3environ');
	Route::view('/g3hyg', 'site.cbc.g3hyg');
	Route::view('/g3kisw', 'site.cbc.g3kisw');
	Route::view('/g3maths', 'site.cbc.g3maths');

	Route::view('/g4', 'site.cbc.g4');
	Route::view('/g4agric', 'site.cbc.g4agric');
	Route::view('/g4cre', 'site.cbc.g4cre');
	Route::view('/g4hs', 'site.cbc.g4hs');
	Route::view('/g4snt', 'site.cbc.g4snt');
	Route::view('/g4sst', 'site.cbc.g4sst');
	Route::view('/import', 'site.cbc.import');

	Route::view('/refer', 'site.pages.referall');
	// Route::view('/import', 'site.pages.import');

	Route::get('export', 'ImportUsersController@export')->name('export');
	Route::get('importExportView', 'ImportUsersController@importExportView');
	Route::post('import', 'ImportUsersController@import')->name('import');
});

Auth::routes();
require 'admin.php';
