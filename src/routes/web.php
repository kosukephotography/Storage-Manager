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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['can:admin-only']], function(){
        // 認証済かつ管理者のみ許可するルート
        Route::post('/users/search', 'App\Http\Controllers\UsersController@search')->name('users.search');
        Route::resource('/users', 'App\Http\Controllers\UsersController');
        Route::resource('/opportunity_relations', 'App\Http\Controllers\OpportunityRelationsController');
    });

    // 認証済ユーザーに許可するルート
    Route::get('/mypage', 'App\Http\Controllers\UsersController@mypage');
    Route::get('/password/change', 'App\Http\Controllers\Auth\ChangePasswordController@showChangePasswordForm')->name('password.form');
    Route::post('/password/change', 'App\Http\Controllers\Auth\ChangePasswordController@ChangePassword')->name('password.change');

    // 未開発の保留ルート
    Route::resource('/storages', 'App\Http\Controllers\StoragesController');
    Route::resource('/reservations', 'App\Http\Controllers\ReservationsController');
    Route::get('/dashboard', 'App\Http\Controllers\ReservationsController@dashboard');
    Route::get('/', 'App\Http\Controllers\ReservationsController@dashboard');

});


