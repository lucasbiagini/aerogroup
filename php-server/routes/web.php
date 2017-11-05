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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/tags/create/{tag}', 'TagController@create');
Route::get('/tags/{tag}/read', 'TagController@read');
Route::get('/tags/{tag}/checkout', 'TagController@checkout');
Route::get('/cpf/{cpf}', 'TagController@cpf');
Route::get('/rfid/{rfid}', 'TagController@rfid');
Route::get('/tags/{tag}/cpf', 'TagController@editCpf');

//Route::get('/', 'DashboardsController@home');
Route::get('/which', 'DashboardsController@which');
Route::get('/create', 'DashboardsController@create');
Route::get('/read', 'DashboardsController@read');