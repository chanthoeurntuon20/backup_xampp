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
//route
Route::get('/start', function () {
    return view('start');
});
Route::get('/lesson1', function () {
    return view('lesson.chapter1');
});
Route::get('/', function () {
    return ["URI","Controller","Blade","View","Model"];
});
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/action', function () {
//     return view('starts');
// })->name('action');

Route::get('/action/{id}', function ($id) {
    return "Hello world".$id;
})->name('action');
Route::get('show.student', function () {
    return "Hello Student WEB2020B";
});
//controller
Route::get('/index','PagesController@index');

Route::get('/action','PagesController@action');
Route::get('/about','PagesController@about');
Route::get('/new','PagesController@new');
Route::get('/join','PagesController@join');
Route::get('/contact','PagesController@contact');
Route::get('/customer','PagesController@listCustomer');