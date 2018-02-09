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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post/{post}',function ($post){
    return $post;
});

Route::post('/video/final','VideoCtr@_final');

//Route::resource('video', 'VideoCtr');

//Route::post('/sms/send','UserCtr@send_sms')->middleware('jwt.auth');


Route::post('/login', 'UserAuth\LoginController@login')->name('api_login');
Route::post('/register', 'UserAuth\RegisterController@register')->name('api_register');

Route::post('/sendCode','UserCtr@sendCode');
Route::post('/requestCode','UserCtr@requestCode');

