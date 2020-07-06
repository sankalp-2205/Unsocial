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

Route::get('/p/create', 'postsController@create');
Route::get('/p/{post}', 'postsController@show');
Route::post('/p', 'postsController@store');

Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');
