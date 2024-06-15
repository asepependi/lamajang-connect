<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;

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
    return view('index');
});

// dashboard 
Route::get('/dashboard', function(){
    return view('dashboard.index');
});

// dashboard budaya
Route::get('/dashboard/budaya', function(){
    return view('dashboard.budaya');
});

// dashboard pariwisata
Route::get('/dashboard/pariwisata', function(){
    return view('dashboard.pariwisata');
});

// dashboard penginapan
Route::get('/dashboard/penginapan', function(){
    return view('dashboard.penginapan');
});


