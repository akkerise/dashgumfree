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

Route::get('/', function () {
    return view('master');
});

Route::get('/index',function(){
	return view('dashgumfree.index')->name('index');
});
Route::get('/calendar',function(){
	return view('dashgumfree.calendar');
})->name('calendar');
Route::get('/calendar',function(){
	return view('dashgumfree.calendar');
})->name('calendar');