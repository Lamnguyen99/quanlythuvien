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

Route::get('test-route', function () {
    return "Xin chao cac ban";
});
Route::get('call-controller','homecontroller@index');


Route::get('/baiviet-{title}/{id}', 'HocmaiController@view');

Route::resource('hocphp', 'HocphpController');