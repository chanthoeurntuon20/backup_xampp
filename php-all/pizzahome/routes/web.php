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

// Route::get('/', function () {
//     return view('welcome');//welcome is view that we can see on broswer
// });
 
Route::get('/','PizzaController@index');
Route::get('/pizza','PizzaController@show');
// Route::get('/data/{topic}/{cat}',function($topic,$cat){
    // name1 use to get value from broswer//name2 use in another page
    // return view("detail",
    //     [
    //     // 'name'=> request('name'),
    //     // 'age' => request('age')
    //         'id' => $id,
    //         'topic' => $topic,
    //         'cat' => $cat
    //     ]);
// });
//Route::get('/data/{topic}/{cat}','PizzaController@show');