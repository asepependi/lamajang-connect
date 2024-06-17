<?php

use App\Http\Controllers\BudayaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\RegisterController;

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
Route::group(['middleware' => 'auth'], function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/', 'index')->name('home');
    });

    Route::prefix('dashboard')->group(function(){
        // dashboard
        Route::controller(DashboardController::class)->group(function(){
            Route::get('/', 'index')->name('dashboard.index');
        });

        // dashboard budaya
        Route::prefix('budaya')->group(function(){
            Route::controller(BudayaController::class)->group(function(){
                Route::get('/', 'index')->name('budaya.index');
                Route::get('/create', 'create')->name('budaya.create');
                Route::post('/store', 'store')->name('budaya.store');
                Route::get('/{budaya}/edit', 'edit')->name('budaya.edit');
                Route::post('/{budaya}/update', 'update')->name('budaya.update');
                Route::post('/{budaya}', 'delete')->name('budaya.delete');
            });
        });

        // dashboard pariwisata
        Route::prefix('pariwisata')->group(function(){
            Route::controller(PariwisataController::class)->group(function(){
                Route::get('/', 'index')->name('pariwisata.index');
                Route::get('/create', 'create')->name('pariwisata.create');
                Route::post('/store', 'store')->name('pariwisata.store');
                Route::get('/{pariwisata}/edit', 'edit')->name('pariwisata.edit');
                Route::post('/{pariwisata}/update', 'update')->name('pariwisata.update');
                Route::post('/{pariwisata}', 'delete')->name('pariwisata.delete');
            });
        });

        // dashboard penginapan
        Route::prefix('penginapan')->group(function(){
            Route::controller(PenginapanController::class)->group(function(){
                Route::get('/', 'index')->name('penginapan.index');
                Route::get('/create', 'create')->name('penginapan.create');
                Route::post('/store', 'store')->name('penginapan.store');
                Route::get('/{penginapan}/edit', 'edit')->name('penginapan.edit');
                Route::post('/{penginapan}/update', 'update')->name('penginapan.update');
                Route::post('/{penginapan}', 'delete')->name('penginapan.delete');
            });
        });
    });
});

Route::prefix('register')->group(function(){
    Route::controller(RegisterController::class)->group(function(){
        Route::get('/', 'index')->name('register.index');
        Route::post('/store', 'store')->name('register.store');
    });
});
