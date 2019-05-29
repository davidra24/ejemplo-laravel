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

Route::get('/', 'beginController@index');
//Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/one', function() {
    return view('views.one');
})->name('one');
Route::get('/two', function() {
    return view('views.two');
})->name('two');
