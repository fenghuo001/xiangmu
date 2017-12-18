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
    return view('admin.login');
});
Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@tologin');

Route::group(['middleware'=>'login'], function(){
	Route::get('/admin','AdminController@index');
	//用户管理
	Route::resource('/user','UserController');
	//分类管理
	Route::resource('/cate','CateController');
    //留言管理
    Route::resource('/messaget','MessagetController');
    //广告管理
    Route::resource('/adv','AdvController');
    //商品管理
    Route::resource('goods','GoodsController');
    //导航管理
    Route::resource('nav','NavController');
    
    //购物车
	Route::post('/cart','CartController@store');
	Route::get('/cart','CartController@cart');
	Route::get('/cart/delete','CartController@delete');

	//
	//地址
	Route::resource('address','AddressController');
	Route::post('addresses','AddressController@addresses');
	Route::get('/getarea','AddressController@getarea');
	Route::get('/address/delete','AddressController@delete');
	//订单
	Route::resource('dingdan','DingdanController');
	Route::post('/dingdan/info','DingdanController@info');

	Route::get('/center','UserController@center');
});
// --------------------------------------------

Route::get('/index','HomeController@index');
Route::get('/liebiao','HomeController@liebiao');
Route::get('/login','HomeController@login');
Route::post('/login','HomeController@dologin');

//前端注册
Route::get('/register','HomeController@register');
Route::post('/register','HomeController@signup');
Route::get('/message','CommonController@message');



