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
    return view ('welcome');
});

Route::get('/welcome', function () {
    return view ('welcome');
});

/*Route::get('/blog', function () {
    return view ('blog');
});*/

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/', 'HomeController@index')->name('welcome');
//Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/home', 'HomeController@index')->name('welcome');
