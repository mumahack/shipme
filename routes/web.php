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

Route::get('/', "Suche@home");

Route::post('/suche', "Suche@suche");


Route::get('/debug', "Suche@debug");

Route::post('/stops', "Suche@stops");