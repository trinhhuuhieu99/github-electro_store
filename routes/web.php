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

// Route::group(['prefix' => 'product'], function () {
    
//     Route::get('mobiles','PagesController@getmobiles')->name('mobiles_type');
//     Route::get('accessories','PagesController@getaccessories')->name('accessories_type');
//     Route::get('home','PagesController@gethome')->name('home_type');

// });

Route::get('mobiles','PagesController@getmobiles')->name('mobiles_type');
Route::get('accessories','PagesController@getaccessories')->name('accessories_type');
Route::get('home','PagesController@gethome')->name('home_type');

Route::get('/about', [
    'as'=>'Thong-tin',
    'uses'=>'PagesController@getabout'
]);


Route::get('/detail',[
    'as'=>'Chi tiết sản phẩm ',
    'uses'=>'PagesController@getdetail'
]);

Route::get('/mail', [
    'as'=>'mailus',
    'uses'=>'PagesController@getmail'
]);