<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home.index');
})->name("root");

Route::get('/card', function () {
    return view('etudiants.card');
})->name("root");


Route::resource('etudiant', HomeController::class);
Route::resource('user', HomeController::class);