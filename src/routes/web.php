<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StoragesController;
use App\Http\Controllers\OpportunityRelationsController;
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

        Route::prefix('/users')->name('users.')->group(function () {
            Route::post('csv', [UsersController::class, 'csv'])->name('csv');
            Route::post('/search', [UsersController::class, 'search'])->name('search');
            Route::get('', [UsersController::class, 'index'])->name('index');
            Route::post('', [UsersController::class, 'store'])->name('store');
            Route::get('/create', [UsersController::class, 'create'])->name('create');
            Route::get('/{id}', [UsersController::class, 'show'])->name('show');
            Route::put('/{id}', [UsersController::class, 'update'])->name('update');
            Route::get('/{id}/edit', [UsersController::class, 'edit'])->name('edit');
        });

        Route::prefix('/storages')->name('storages.')->group(function () {
            Route::post('/csv', [StoragesController::class, 'csv'])->name('csv');
            Route::post('', [StoragesController::class, 'store'])->name('store');
            Route::get('/create', [StoragesController::class, 'create'])->name('create');
            Route::put('/{id}', [StoragesController::class, 'update'])->name('update');
            Route::get('/{id}/edit', [StoragesController::class, 'edit'])->name('edit');
        });

        Route::prefix('/opportunity_relations')->name('opportunity_relations.')->group(function () {
            Route::post('/csv', [OpportunityRelationsController::class, 'csv'])->name('csv');
            Route::post('', [OpportunityRelationsController::class, 'store'])->name('store');
            Route::get('/create', [OpportunityRelationsController::class, 'create'])->name('create');
            Route::put('/{id}', [OpportunityRelationsController::class, 'update'])->name('update');
            Route::get('/{id}/edit', [OpportunityRelationsController::class, 'edit'])->name('edit');
        });
    });

    // 認証済ユーザーに許可するルート

    Route::get('/mypage', [UsersController::class, 'mypage'])->name('mypage');
    Route::get('/password/change', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.form');
    Route::post('/password/change', [ChangePasswordController::class, 'ChangePassword'])->name('password.change');

    Route::prefix('/storages')->name('storages.')->group(function () {
        Route::post('/search', [StoragesController::class, 'search'])->name('search');
        Route::get('', [StoragesController::class, 'index'])->name('index');
        Route::get('/{id}', [StoragesController::class, 'show'])->name('show');
    });

    Route::prefix('/opportunity_relations')->name('opportunity_relations.')->group(function () {
        Route::post('/search', [OpportunityRelationsController::class, 'search'])->name('search');
        Route::get('', [OpportunityRelationsController::class, 'index'])->name('index');
        Route::get('/{id}', [OpportunityRelationsController::class, 'show'])->name('show');
    });







    // 未開発の保留ルート
    Route::resource('reservations', 'App\Http\Controllers\ReservationsController');
    Route::get('/dashboard', 'App\Http\Controllers\ReservationsController@dashboard');
    Route::get('/', 'App\Http\Controllers\ReservationsController@dashboard');
});