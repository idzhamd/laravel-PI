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

Auth::routes();

Route::get('/shop','ShopController@index');
Route::get('/product/{id}','ShopController@show');
Route::post('/product/{id}/buy','ShopController@buy');
Route::get('/order/{id}','ShopController@print');

Route::get('/home', 'HomeController@index');
Route::get('/home/list', 'HomeController@list');
Route::get('/home/product/{id}','HomeController@show');
Route::get('/home/product/{id}/edit','HomeController@edit');
Route::post('/home/product/{id}/update','HomeController@update');
Route::delete('/home/product/{id}/delete','HomeController@delete');
Route::get('/home/config','HomeController@config');
Route::post('/home/config/update','HomeController@configUpdate');
Route::get('/home/add','HomeController@add');
Route::post('/home/product/insert','HomeController@insert');
Route::get('/home/report','HomeController@report');
Route::get('/home/report/2017','HomeController@report17');
Route::get('/home/report/2016','HomeController@report16');
Route::get('/home/report/{id}/confirm','HomeController@confirm');
Route::get('/home/report/{id}','HomeController@showReport');


