<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'loginGet')->name('login');
    Route::post('/login', 'loginPost')->name('login.post');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard');

Route::get('/dashboard/location/create', [LocationController::class, 'create'])->name('location.create');