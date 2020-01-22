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
// Route::get('/admin', function () {
//     return "welcome to admin pannel";
// });

// Route::post('/admin', 'AdminController@postmethod');
// Route::put();
// Route::delete();
// Route::patch();

Route::get('/admin', 'AdminController@index');






Route::get('/', function () {
    return view('welcome');
});