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
    return view('layouts/main');
});

Route::get('/index', 'IndexController@index');

Route::get('/tentangkami', 'TentangkamiController@index');

Route::get('/produkkami', 'ProdukkamiController@index');

Route::get('/promo', 'PromoController@index');

Route::get('/testimoni', 'TestimoniController@index');

Route::get('/hubungikami', 'HubungikamiController@index');
 
