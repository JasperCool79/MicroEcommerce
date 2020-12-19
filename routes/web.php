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


Route::get('/','PageController@welcome')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{id}/details','ProductPageController@show')->name('product.details');
Route::get('/category/{id}/show','ProductPageController@product_category')->name('product_category.show');

Route::get('/blog/index','BlogPageController@index')->name('blog.index');
Route::get('/blog/{id}/detail','BlogPageController@show')->name('blog.show');

Route::get('/about','PageController@about')->name('about');
Route::get('/contact','PageController@contact')->name('contact');

Route::post('/search','PageController@search')->name('search');

Route::get('/search/code','PageController@search_code')->name('search.code');
Route::post('/search/code','PageController@search_code_result')->name('search.code.result');

Route::post('/cart/add','ShoppingController@add_to_cart')->name('cart.add');
Route::get('/cart','ShoppingController@cart')->name('cart');

Route::get('/cart/{id}/delete','ShoppingController@cart_delete')->name('cart.delete');

Route::get('/cart/increase/{id}/{qty}','ShoppingController@increase')->name('cart.increase');
Route::get('/cart/decrease/{id}/{qty}','ShoppingController@decrease')->name('cart.decrease');

Route::post('/order/make','OrderController@make_order')->name('make.order');

Route::get('/order/complete/{order_id}','OrderController@complete_order')->name('complete.order');

Route::get('/my_orders','ProfileController@my_orders')->name('myorders');
Route::get('/my_orders/{id}/details','ProfileController@my_order_details')->name('myorders.details');

Route::get('/track_order','OrderController@track_order')->name('track.order');
Route::post('/track_order','OrderController@track_order_show')->name('track.order.show');

Route::get('/proof','ShoppingController@send')->name('proof.send');
Route::post('/proof','ShoppingController@store')->name('proof.store');

Route::get('/profile','ProfileController@index')->name('profile.index');
Route::post('/profile','ProfileController@update')->name('profile.update');
Route::post('/profile/update_password','ProfileController@update_password')->name('profile.password.update');

Route::post('/send_message','PageController@send')->name('send.message');

Route::get('/return_policy','PageController@return_policy')->name('return_policy');
Route::get('/faq','PageController@faq')->name('faq');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::group(array('prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'),function (){

    Route::get('/','AdminController@index')->name('admin.index');

    Route::get('/documentation','AdminController@documentation')->name('documentation');

    Route::get('/order/{id}/complete','AdminController@complete')->name('order.make_complete');
    Route::get('/order/{id}/delete','AdminController@order_delete')->name('order.make_delete');

    Route::get('/proof/{id}/complete','AdminController@proof_complete')->name('proof.complete');
    Route::get('/proof/{id}/delete','AdminController@proof_delete')->name('proof.delete');

    Route::get('/user','UserController@index')->name('admin.user');
    Route::get('/user/{id}/makeadmin','UserController@makeadmin')->name('admin.makeadmin');
    Route::get('/user/{id}/unmakeadmin','UserController@unmakeadmin')->name('admin.unmakeadmin');

    Route::get('/user/{id}delete','UserController@destroy')->name('admin.user.delete');

    Route::get('/categories','CategoryController@index')->name('category.index');
    Route::get('/category/create','CategoryController@create')->name('category.create');
    Route::post('/category/create','CategoryController@store')->name('category.store');

    Route::get('/category/{id}/edit','CategoryController@edit')->name('category.edit');
    Route::post('/category/{id}/edit','CategoryController@update')->name('category.update');
    Route::get('/category/{id}/destroy','CategoryController@destroy')->name('category.destroy');

    Route::resource('/product','ProductController');
    Route::get('/products/{id}/bestselling','ProductController@best_selling_add')->name('product.add.best_selling');
    Route::get('/products/{id}/removebestselling','ProductController@best_selling_remove')->name('product.remove.best_selling');

    Route::get('/products/{id}/popular','ProductController@popular_add')->name('product.add.popular');
    Route::get('/products/{id}/removepopular','ProductController@popular_remove')->name('product.remove.popular');

    Route::get('/posts','PostController@index')->name('post.index');
    Route::get('/post/create','PostController@create')->name('post.create');
    Route::post('/post/create','PostController@store')->name('post.store');
    Route::get('/post/{id}/edit','PostController@edit')->name('post.edit');
    Route::post('/post/{id}/update','PostController@update')->name('post.update');
    Route::get('/post/{id}/destroy','PostController@destroy')->name('post.destroy');

    Route::get('/options','OptionController@index')->name('options');

    Route::get('/options/match/{id}','OptionController@match')->name('options.match');
    Route::post('/options/match/{id}','OptionController@match_sync')->name('options.match.sync');

    Route::get('/option/newname','OptionController@newname')->name('option.newname');
    Route::post('/option/newname','OptionController@newname_sotre')->name('option.store');
    Route::get('/option/newname/{id}/edit','OptionController@newname_edit')->name('option.edit');
    Route::post('/option/newname/{id}/update','OptionController@newname_update')->name('option.update');
    Route::get('/option/newname/{id}/delete','OptionController@newname_delete')->name('option.delete');

    Route::get('/option/value','OptionController@value')->name('option.value');
    Route::post('/option/value','OptionController@value_sotre')->name('option.value.store');
    Route::get('/option/value/{id}/edit','OptionController@value_edit')->name('option.value.edit');
    Route::post('/option/value/{id}/update','OptionController@value_update')->name('option.value.update');
    Route::get('/option/value/{id}/delete','OptionController@value_delete')->name('option.value.delete');


    Route::get('/reviews','ReviewController@index')->name('review.index');

    Route::get('/review/create','ReviewController@create')->name('review.create');
    Route::post('/review/create','ReviewController@store')->name('review.store');

    Route::get('/review/{id}/edit','ReviewController@edit')->name('review.edit');
    Route::post('/review/{id}/edit','ReviewController@update')->name('review.update');
    Route::post('/review/{id}/destroy','ReviewController@destroy')->name('review.destroy');

    Route::get('/receive_message','AdminController@receive_message')->name('receive_message');
    Route::get('/message/{id}/delete','AdminController@delete_message')->name('delete_message');




});




