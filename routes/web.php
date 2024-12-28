<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menu', [Controller::class, 'menu'])->name('menu');
Route::get('/reservation', [Controller::class, 'reservation'])->name('reservation');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/owner', [Controller::class, 'owner'])->name('owner');

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});
