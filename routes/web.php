<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('root')->middleware(['auth']);
Route::post('/create_secretaire', [RegisteredUserController::class, 'store'])->name('add_secretaire')->middleware(['auth']);

Route::get('/card', function () {
    return view('etudiants.card');
})->name("card")->middleware(['auth']);

Route::get('/dashboard', [HomeController::class , "index"])->middleware(['auth'])->name('dashboard');
Route::get('/secretaires', [HomeController::class , "secretaire"])->middleware(['auth'])->name('liste_secretaire');
Route::get('/update_profile', [HomeController::class , "update_profile"])->middleware(['auth'])->name('update_profile');

Route::get('/create_user', function () {
    return view('auth.register');
})->middleware(['auth'])->name('secretaire');

Route::resource('etudiants', EtudiantController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
