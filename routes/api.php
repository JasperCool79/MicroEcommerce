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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['namespace'=>'API','middleware' => ['guest:api']], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
});
Route::group(['namespace'=>'API','middleware'=>['auth:api']], function() {
    // Route::get('hello',function(){
    //     return response()->json(['test' => 'test']);
    // });
    Route::get('logout', 'AuthController@logout');
    Route::get('getuser', 'AuthController@getUser');

});

Route::group(['namespace'=>'API'],function(){
    Route::get('contact_info','ContactInfoController@index');
    Route::get('get_categories','CategoryController@index');
    Route::get('get_latest_products','ProductController@latest');
    Route::get('get_best_selling_products','ProductController@best_selling');
    Route::get('get_popular_products','ProductController@popular');
    Route::get('get_reviews','ReviewController@index');
});
