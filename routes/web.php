<?php


Auth::routes();

Route::get('/articals', 'PostController@index')->name('post.index');
//public
Route::get('/account', 'UserAccountController@create')->name('account.create');
Route::get('/test', 'ProductController@index');

Route::get('/', 'LandingPageController@index')->name('LandingPage.index');
//shop
Route::get('/shop/{slug}', 'ShopController@show')->name('Shop.show');
Route::get('/shop', 'ShopController@index')->name('Shop.index');

//cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart{id}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{id}', 'CartController@update')->name('cart.update');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/clearcart', 'CartController@empty')->name('cart.empty');
//contact
Route::get('/contact', 'ContactUsController@index')->name('contact.index');

//checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::get('/gcheckout', 'CheckoutController@index')->name('gcheckout.index');

Route::get('/payment', 'PayOrderController@store');
Route::get('/payment', 'PayOrderController@create')->name('payment.create');


Auth::routes();





//admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
