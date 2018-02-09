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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/users_paging', 'UserCtr@index')->name('users.data');
  Route::get('/videos_paging', 'VideoCtr@getDataTable')->name('videos.data');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/video_upload', 'VideoCtr@store')->name('video.upload');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::get('/user_register', function(){
      return view('/admin/register');
  });

  Route::get('/users', function(){
      return view('/admin/users');
  });

    Route::get('/upload', function(){
        return view('/admin/upload');
    });

    Route::get('/videos', function(){
        return view('/admin/videos');
    });

});

Route::group(['prefix' => 'user'], function () {


  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'UserAuth\RegisterController@register')->name('user.register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});




//City

Route::get('/city/{id}','CityCtr@index')->where(['id' => '[0-9]+']);
Route::get('/city/getCity/{id}','CityCtr@getState')->where(['id' => '[0-9]+']);
Route::get('/cities','CityCtr@cities');

Route::get('/video/permission_city','VideoCtr@sync_city');

Route::get('/video/permission_user','VideoCtr@sync_user');

Route::group(['middleware' => 'cors'], function () {

    Route::resource('video', 'VideoCtr');




});

Route::get('/infophp',function (){
    echo phpinfo();
    return '';
});
