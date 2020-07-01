<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/rp.com', 'MyController@getView_RP')-> name('rp');
Route::post('/rp.com', 'MyController@postView_RP');

Route::get('/rp.com/login', 'MyController@getLogin_RP')-> name('rplogin');
Route::post('/rp.com/login', 'MyController@postlogin_RP');

Route::get('/rp.com/userinfo', 'MyController@getUser_RP')-> name('userinfo');
Route::post('/rp.com/userinfo', 'MyController@postUser_RP');

Route::get('/rp.com/cb', 'MyController@getCallBack_RP')-> name('callback');
Route::post('/rp.com/cb', 'MyController@postCallBack_RP');

Route::get('/op.com/login', 'MyController@getView_Login')-> name('oplogin');
Route::post('/op.com/login', 'MyController@postView_Login');

Route::get('/op.com/register', 'MyController@getView_Register')-> name('register');
Route::post('/op.com/register', 'MyController@postView_Register');


Route::get('/op.com', 'MyController@getView_OP')-> name('op');
Route::post('/op.com/register-info','MyController@postView_OP')->name('register-info');
Route::post('/op.com/check-info','MyController@checkView_OP')->name('check-info');

//api get token
Route::post('/token', 'MyController@postToken');

//api get user info
Route::get('/userinfo', 'MyController@getUserInfo');



 