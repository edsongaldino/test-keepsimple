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
Route::get('/', 'App\Http\Controllers\AppController@home')->name('home')->middleware('auth');
Route::get('/login', 'App\Http\Controllers\AppController@login')->name('login');
Route::get('/register', 'App\Http\Controllers\AppController@register')->name('register');
Route::get('/home', 'App\Http\Controllers\AppController@home')->name('home');

//Products
Route::post('/vehicles/search', 'App\Http\Controllers\AppController@vehiclesSearch')->name('vehicles.search')->middleware('auth');


//Orders
Route::get('/vehicles', 'App\Http\Controllers\VehicleController@index')->name('vehicles')->middleware('auth');
Route::get('/vehicles/create', 'App\Http\Controllers\VehicleController@create')->name('vehicles.create')->middleware('auth');
Route::get('/vehicles/{id}/edit', 'App\Http\Controllers\VehicleController@edit')->middleware('auth');
Route::post('/vehicles/store', 'App\Http\Controllers\VehicleController@store')->name('vehicles.store')->middleware('auth');
Route::post('/vehicle/update', 'App\Http\Controllers\VehicleController@update')->name('vehicle.update')->middleware('auth');
Route::post('/vehicle/remove', 'App\Http\Controllers\VehicleController@destroy')->name('vehicle.remove')->middleware('auth');

Route::get('/vehicles/getModels/{brand}', 'App\Http\Controllers\VehicleModelController@getModels');

//LOGIN ROTAS
Route::post('/login/do', 'App\Http\Controllers\AuthController@Login')->name('login.do');
Route::get('logout', 'App\Http\Controllers\AuthController@Logout')->name('logout')->middleware('auth');

Route::post('/salvar-usuario', 'App\Http\Controllers\UserController@store')->name('salvar-usuario');