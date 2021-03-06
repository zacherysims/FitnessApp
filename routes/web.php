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

Route::get('/viewdiets', 'dietcontroller@index');

Route::get('/viewworkouts', 'workoutcontroller@index');

Route::get('/adddiet', function () {
    return view('diets/adddiet');
});
Route::get('/test', function () {
    return view('Diets/test');
});

Route::get('/addworkout', function () {
    return view('workouts/addworkout');
});

Route::get('/viewroutines', 'routinecontroller@index');

Route::get('/addroutine', function () {
    return view('Routines/addroutine');
});

Route::get('/addexercise', 'exercisecontroller@add');

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

Route::get('/fill_adddiet', 'dietcontroller@fill');

Route::post('/fill_addworkout', 'workoutcontroller@fill');

Route::post('/fill_addroutine', 'routinecontroller@fill');

Route::get('/filloutform', function () {
    return view('filloutform');
});

Route::get('/fillexercise', function () {
    return view('workouts/addexercise');
});

Route::get('/fillexerciseform', 'exercisecontroller@fill');
Route::get('/viewexercises', 'exercisecontroller@index');
Route::get('/viewsets', 'setcontroller@index');
Route::get('/fillsetform', 'setcontroller@fill');
Route::get('/fillset', function () {
    return view('workouts/addset');
});
