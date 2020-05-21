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

Route::get('/login','ControlLog@showFormLogin')->name('showLogin');

Route::post('/login','ControlLog@loginPost');

Route::get('/product','DiscountCaculator@showProducts');

Route::post('/show', 'DiscountCaculator@nextProduct');

Route::get('/translate','Translate@showFormTranslate');

Route::get('/translated','Translate@showTranslated');
