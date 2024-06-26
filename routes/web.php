<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show/{show}', [HomeController::class, 'showShow'])->name('show');

//Auth
Route::get('/register-form/{role}', [RegisterController::class, 'showRegisterForm'])
    ->where('role', 'client|organizer')
    ->name('show-register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login-form', [RegisterController::class, 'showLoginForm'])->name('show-login');
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

//Auth Cliente
Route::post('/store-cliente', [RegisterController::class, 'storeUserClient'])->name('storeClient');
Route::get('/reestablecer-contrasena', [RegisterController::class, 'resetPassword'])->name('resetPassword');
Route::post('/cambiar-contrasena', [RegisterController::class, 'changePassword'])->name('changePassword');
Route::put('/actualizar-contrasena', [RegisterController::class, 'updatePassword'])->name('updatePassword');

//User
Route::put('/show/{show}/actualizar-usuario', [UserController::class, 'update'])->name('updateUser');

//Compra
Route::get('/show/{show}/seleccion-tickets', [CompraController::class, 'ticketSelection'])->name('ticketSelection');
Route::post('/show/{show}/seleccion-asientos', [CompraController::class, 'seatSelection'])->name('seatSelection');
Route::post('/show/{show}/pagar', [CompraController::class, 'pagar'])->name('pagar');