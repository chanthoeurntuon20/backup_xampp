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
Route::get('/student', 'StudentController@index');
Route::get('/student/create', 'StudentController@create');
Route::get('/student/{id}', 'StudentController@show');
Route::post('/student', 'StudentController@store');
Route::delete('/student/{id}', 'StudentController@destroy');

Route::get('/teacher', 'TeacherController@index');
Route::get('/teacher/create', 'TeacherController@create');
Route::get('/teacher/{id}', 'TeacherController@show');
Route::post('/teacher', 'TeacherController@store');
Route::delete('/teacher/{id}', 'TeacherController@destroy');

Route::get('/cleaner', 'CleanerController@index');
Route::get('/cleaner/create', 'CleanerController@create');
Route::get('/cleaner/{id}', 'CleanerController@show');
Route::post('/cleaner', 'CleanerController@store');
Route::delete('/cleaner/{id}', 'CleanerController@destroy');