<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;

Auth::routes();

// Layout
Route::get('/home', [Controller::class, 'menu'])->name('menu');
Route::get('/reservation', [Controller::class, 'reservation'])->name('reservation');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/owner', [Controller::class, 'owner'])->name('owner');



Route::resource('dashboard', DashboardController::class);
Route::resource('menu', MenuController::class);

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});
