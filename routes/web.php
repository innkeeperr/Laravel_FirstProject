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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Account endpoints, from dashboard
Route::get('/account', 'AccountController@index');
Route::get('/logout', 'AccountController@logout');
Route::patch('/account', 'AccountController@update');

//Game endpoints
Route::get('/home', 'GameController@index');
Route::get('/game/{id}', 'GameController@single');

//Developer endpoints
Route::get('/developers', 'DeveloperController@index');
Route::get('/dev/{id}', 'DeveloperController@single');

//Others
Route::get('/contact', 'OtherController@contact');
