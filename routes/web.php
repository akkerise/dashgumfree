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

Route::get('/test', function () {
    return view('master');
});

Route::get('/index',function(){
	return view('dashgumfree.index');
});
Route::get('/calendar',function(){
	return view('dashgumfree.calendar');
})->name('calendar');
Route::get('/chartjs',function(){
	return view('dashgumfree.chartjs');
})->name('chartjs');
Route::get('/basic_table',function()
{
	return view('dashgumfree.basic_table');
});