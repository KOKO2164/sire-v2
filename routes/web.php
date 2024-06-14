<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth Cliente
Route::get('/registrar-cliente', [RegisterController::class, 'registerUserClient'])->name('registerClient');
Route::post('/store-cliente', [RegisterController::class, 'storeUserClient'])->name('storeClient');
Route::get('/login-cliente', [RegisterController::class, 'loginUserClient'])->name('loginClient');
Route::post('/enter-cliente', [RegisterController::class, 'enterUserClient'])->name('enterClient');
Route::get('/reestablecer-contrasena', [RegisterController::class, 'resetPassword'])->name('resetPassword');
Route::post('/cambiar-contrasena', [RegisterController::class, 'changePassword'])->name('changePassword');
Route::put('/actualizar-contrasena', [RegisterController::class, 'updatePassword'])->name('updatePassword');

//Auth Organizador
Route::get('/registrar-organizador', [RegisterController::class, 'registerUserOrganizer'])->name('registerOrganizer');
Route::post('/store-organizador', [RegisterController::class, 'storeUserOrganizer'])->name('storeOrganizer');
Route::get('/login-organizador', [RegisterController::class, 'loginUserOrganizer'])->name('loginOrganizer');
Route::post('/enter-organizador', [RegisterController::class, 'enterUserOrganizer'])->name('enterOrganizer');
