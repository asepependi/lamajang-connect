<?php

use App\Http\Controllers\API\MasterDataController;
use App\Http\Controllers\API\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::prefix('home')->group(function(){
        Route::controller(HomeController::class)->group(function(){
            Route::get('budaya', 'budaya');
            Route::get('pariwisata', 'pariwisata');
            Route::get('penginapan', 'penginapan');
        });
    });
    Route::controller(MasterDataController::class)->group(function(){
        Route::get('budaya', 'budaya');
        Route::get('pariwisata', 'pariwisata');
        Route::get('pariwisata/{id}/detail', 'pariwisataDetail');
        Route::get('penginapan', 'penginapan');
        Route::get('penginapan/{id}/detail', 'penginapanDetail');
    });
});
