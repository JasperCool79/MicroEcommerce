<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers, Authorization, X-CSRF-Token');
header('Access-Control-Allow-Credentials: true');

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace'=>'API','middleware' => ['guest:api']], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
});

Route::group(['namespace'=>'API'],function(){
    Route::get('contact_info','ContactInfoController@index');
    Route::get('get_categories','CategoryController@index');
    Route::get('get_latest_products','ProductController@latest');
    Route::get('get_best_selling_products','ProductController@best_selling');
    Route::get('get_popular_products','ProductController@popular');
    Route::get('get_products_category_id','ProductController@getProductCategory');
    Route::get('get_product_id','ProductController@getProductById');
    Route::post('store_order','OrderController@make_order');
    Route::post('send_proof','OrderController@send_proof');

    Route::get('get_reviews','ReviewController@index');
});
