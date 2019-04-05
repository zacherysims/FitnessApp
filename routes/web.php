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

Route::get('/viewequipment', function () {
    return view('equipment/viewequipment');
});

Route::get('/viewmeals', function () {
    return view('Diets/meals/viewmeals');
});

Route::get('/addmeal', function () {
    return view('Diets/meals/addmeal');
});

Route::get('/adddiet', function () {
    return view('Diets/adddiet');
});

Route::get('/addworkout', function () {
    return view('workouts/addworkout');
});

Route::get('/addequipment', function () {
    return view('equipment/addequipment');
});
