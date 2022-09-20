<?php

use App\order_list;
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

//Route::get('/', function () {
//    return view('view_orders')->with("orders_arr", order_list::all());
//});

Route::get('/', 'OrderListController@index');
Route::get('/create', 'OrderListController@create');
Route::get('/save_new_order', 'OrderListController@store');
Route::get('/delete/{id}', 'OrderListController@destroy');
Route::get('/edit/{id}', 'OrderListController@edit');
Route::get('/update_order/{id}', 'OrderListController@update');
