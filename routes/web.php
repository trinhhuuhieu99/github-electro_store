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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
Route::get('/', 'PagesController@getindex' )->name('Trang-chu');
    
Route::group(['prefix' => 'product'], function () {
    
    Route::get('mobiles','PagesController@getmobiles')->name('sản phẩm điện thoại');
    Route::get('accessories','PagesController@getaccessories')->name('phụ kiện');
    Route::get('home','PagesController@gethome')->name('sản phẩm gia đình');

});

Route::get('/about', 'PagesController@getabout')->name('Thong-tin');


Route::get('/detail', 'PagesController@getdetail')->name('Chi tiết sản phẩm');

Route::get('/mail', 'PagesController@getmail')->name('Gửi-mail');
>>>>>>> 9c6eeae239da3e8b91d6c0cc380e06bada49b563
