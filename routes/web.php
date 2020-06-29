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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index ', [
    'as'=>'Trang-chu',
    'uses'=>'PagesController@getindex'
]);

Route::get('/detail',[
    'as'=>'Chi tiết sản phẩm ',
    'uses'=>'PagesController@getdetail'
]);