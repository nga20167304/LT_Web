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

Route::get('KhoaHoc',function(){
    return "Hello";
});

//Truyền tham số
Route::get('HoTen/{ten}',function($ten){
    echo "Your name is:  ".$ten;
});

Route::get('n','MyController@xinChao');

//URL
Route::get('MyRequest','MyController@getURL');

//Gửi dữ liệu với request
Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
