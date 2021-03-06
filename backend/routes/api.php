<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/test', function(){
//     return response()->json(['msg' => 'Success fetch!']);
// });

// Route::group([
//     'prefix' => 'auth'
// ], function () {
    
// });

Route::group(['prefix' => 'auth', 'name' => 'auth.'], function(){
    Route::post('login', 'Auth\AuthController@login')->name('login');
    Route::post('register', 'Auth\AuthController@register')->name('register');
  
    Route::group(['name' => 'user.', 'middleware' => 'auth:api'], function() {
        Route::get('logout', 'Auth\AuthController@logout')->name('logout');
        Route::get('user', 'Auth\AuthController@user')->name('user');
    });
});