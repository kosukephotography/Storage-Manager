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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', 'App\Http\Controllers\UsersController');
Route::resource('opportunity_relations', 'App\Http\Controllers\OpportunityRelationsController');
Route::resource('storages', 'App\Http\Controllers\StoragesController');
Route::resource('reservations', 'App\Http\Controllers\ReservationsController');
Route::get('mypage', 'App\Http\Controllers\UsersController@mypage');
Route::get('dashboard', 'App\Http\Controllers\ReservationsController@dashboard');