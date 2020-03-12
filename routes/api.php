<?php

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
// Route::post('register', 'UserController@register');
// Route::post('login', 'UserController@login');

// Route::middleware(['jwt.verify'])->group(function(){
// 	Route::get('penyewaan', 'PenyewaanController@penyewaan');
// 	Route::get('penyewaanall', 'PenyewaanController@penyewaanAuth');
// 	Route::get('user', 'UserController@getAuthenticatedUser');
// 	Route::get('penyewaan','PenyewaanController@index');
// 	Route::post('penyewaan','PenyewaanController@create');
// 	Route::get('/penyewaan/{id}','PenyewaanController@detail');
// 	Route::put('/penyewaan/{id}','PenyewaanController@update');
// 	Route::delete('/penyewaan/{id}','PenyewaanController@delete');
// });
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::middleware(['jwt.verify'])->group(function(){
//     Route::get('mobil', 'MobilController@mobil');
//     Route::get('mobilall', 'MobilController@mobilAuth');
//     Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('mobil', 'MobilController@index');
    Route::post('mobil', 'MobilController@create');
    Route::get('/mobil/{id}', 'MobilController@detail');
    Route::put('/mobil/{id}', 'MobilController@update');
    Route::delete('/mobil/{id}', 'MobilController@delete');
    Route::post('/nota/{id}', 'BookingController@hitung');
});


