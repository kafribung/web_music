<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\{AlbumController, BandController, DashboardController, LiricController,};


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', DashboardController::class);
    Route::resource('/bands', BandController::class);
    Route::resource('/albums', AlbumController::class);
    Route::resource('/lirics', LiricController::class);
});

Route::get('/home', HomeController::class)->name('home');
