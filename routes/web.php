<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home.index');
<<<<<<< HEAD
})->name("root");

Route::get('/card', function () {
    return view('etudiants.card');
})->name("root");
=======
});
>>>>>>> 600bb169 (commit)


Route::resource('etudiant', HomeController::class);
Route::resource('user', HomeController::class);