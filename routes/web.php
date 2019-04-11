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

Route::get('/viewdiets', function () {
    return view('Diets/viewdiets');
});

Route::get('/viewworkouts', function () {
    return view('workouts/viewworkouts');
});

Route::get('/adddiet', 'dietcontroller@adddiet');

Route::get('/test', function () {
    return view('Diets/test');
});

Route::get('/addworkout', function () {
    return view('workouts/addworkout');
});

Route::get('/viewroutines', function () {
    return view('Routines/viewroutines');
});

Route::get('/addroutine', function () {
    return view('Routines/addroutine');
});

Route::get('/addexercise', function () {
    return view('workouts/addexercise');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/formfill', 'personellcontroller@fill');

Route::get('/filloutform', function () {
    return view('filloutform');
});
