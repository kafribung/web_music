<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\{DashboardController, BandController};


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', DashboardController::class);
    Route::resource('/band', BandController::class);
});

Route::get('/home', HomeController::class)->name('home');
