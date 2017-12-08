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
// 商品管理
Route::resource('/goods','GoodsController');
//分类管理
Route::resource('/cate','CateController');
});