<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home.index');
});


Route::get('inscription', [HomeController::class, 'index']);
Route::get('user', [HomeController::class, 'inscription'])->name('profile');