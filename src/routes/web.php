<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StoragesController;
use App\Http\Controllers\Auth\ChangePasswordController;

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

        //// Users関連
        Route::post('users/csv', [UsersController::class, 'csv'])->name('users.csv');
        Route::post('users/search', [UsersController::class, 'search'])->name('users.search');
        Route::get('users', [UsersController::class, 'index'])->name('users.index');
        Route::post('users', [UsersController::class, 'store'])->name('users.store');
        Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
        Route::get('users/{id}', [UsersController::class, 'show'])->name('users.show');
        Route::put('users/{id}', [UsersController::class, 'update'])->name('users.update');
        Route::get('users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');

        //// Storages関連

        Route::post('/storages/csv', [StoragesController::class, 'csv'])->name('storages.csv');
        Route::post('/storages/search', [StoragesController::class, 'search'])->name('storages.search');
        Route::resource('storages', StoragesController::class)->except(['destroy']);
    });

    // 認証済ユーザーに許可するルート
    Route::resource('storages', StoragesController::class)->only(['index', 'show']);
    Route::get('/mypage', [UsersController::class, 'mypage'])->name('mypage');
    Route::get('/password/change', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.form');
    Route::post('/password/change', [ChangePasswordController::class, 'ChangePassword'])->name('password.change');
    
    // 未開発の保留ルート
    Route::resource('opportunity_relations', 'App\Http\Controllers\OpportunityRelationsController');
    Route::resource('reservations', 'App\Http\Controllers\ReservationsController');
    Route::get('/dashboard', 'App\Http\Controllers\ReservationsController@dashboard');
    Route::get('/', 'App\Http\Controllers\ReservationsController@dashboard');
});