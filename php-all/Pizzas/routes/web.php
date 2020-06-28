<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function() {
    return view('welcome');
});
Route::get('/pizza', 'PizzaController@index');
Route::get('/pizza/create', 'PizzaController@create');
Route::post('/pizza', 'PizzaController@store');
Route::get('/pizza/{id}', 'PizzaController@show');
Route::delete('/pizza/{id}', 'PizzaController@destroy');

Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');