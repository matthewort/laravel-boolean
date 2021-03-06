<?php

use Illuminate\Support\Facades\Route;

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

// SENZA CONTROLLER

Route::get('/helloAll', function () {
    return view('nocontroller');
});

Route::get('/helloYou', function () {
    return view('nocontroller1', [
        'name' => 'Johnny'
    ]);
});

Route::get('/helloYou2', function () {
    return view('nocontroller1', [
        'name' => 'Mark'
    ]);
});

// CON CONTROLLER

Route::get('/holaTodo', 'Controller1@test');
Route::get('/holaTu', 'Controller1@test1');
Route::get('/holaTu2', 'Controller1@test2');