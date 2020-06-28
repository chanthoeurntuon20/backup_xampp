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
Route::get('/action','PagesController@action');
Route::get('/about','PagesController@about');
Route::get('/news','PagesController@news');
Route::get('/join','PagesController@join');
Route::get('/contact','PagesController@contact');
