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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Lấy danh người dùng
Route::get('users', 'Api\Auth\UserController@index')->name('users.index');

Route::group(
    [           
        'namespace' => 'App\Http\Controllers\Api\Auth',
        'prefix' => 'auth',
    ], function(){
        Route::post('login', ['uses'=>'UserController@login']);
        //Route::get('register', ['uses'=>'UserController@register']);
});