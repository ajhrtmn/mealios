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


//////////////////
//
// Auth Routes
//
//////////////////



Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');


//////////////////
//
// User Routes
//
//////////////////

Route::get('/dashboard', 'UserController@index')->name('dashboard');


//////////////////
//
// Recipe Routes
//
//////////////////

Route::get('/recipes', 'RecipeController@index')->name('recipes.index')->middleware('auth');
Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create')->middleware('auth');
Route::post('/recipes', 'RecipeController@store')->name('recipes.store')->middleware('auth');
Route::get('/recipes/{recipe}', 'RecipeController@show')->name('recipes.show')->middleware('auth');
Route::get('/recipes/{recipe}/edit', 'RecipeController@edit')->name('recipes.edit')->middleware('auth');
