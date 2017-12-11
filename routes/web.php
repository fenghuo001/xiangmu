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
    return view('admin.index');
});
Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@tologin');



Route::group(['middleware'=>'login'], function(){
	Route::get('/admin','AdminController@index');
	//用户管理
	Route::resource('/user','UserController');
	//分类管理
	Route::resource('/cate','CateController');


	Route::resource('guanggao','GuanggaoController');
});
// --------------------------------------------

// 商品管理
Route::resource('goods','GoodsController');


Route::get('/index','HomeController@index');
Route::get('/liebiao','HomeController@liebiao');
Route::get('/goods/{$id}','HomeController@xiangqing');
Route::get('/login','HomeController@login');
Route::post('/login','HomeController@dologin');

//前端注册
Route::get('/register','HomeController@register');
Route::post('/register','HomeController@signup');
Route::get('/message','CommonController@message');