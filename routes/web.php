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
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/vehicle', 'VehicleController@index');
    Route::get('/vehicle/create', 'VehicleController@create');
    Route::post('/vehicle', 'VehicleController@store');
    Route::get('/vehicle/{id}', 'VehicleController@show');
    Route::get('/vehicle/{id}/edit', 'VehicleController@edit');
    Route::put('/vehicle/{id}', 'VehicleController@update');
    Route::delete('/vehicle/{id}', 'VehicleController@destroy');

    Route::get("/teacher" , function (){
    	return view("teacher/index");
    });


    Route::get("/student" , function (){
    	return view("student/index");
    });
    Route::get("/role" , function (){
    	 echo Auth::user()->profile->role;
    });
});




Route::get("/pricing" , function (){
	return view("theme1");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('book', 'BookController');
Route::resource('book', 'BookController');