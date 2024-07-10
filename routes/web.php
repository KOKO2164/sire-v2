<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayController;
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
Route::get('/show/{slug}', [HomeController::class, 'showShow'])->name('show');

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
Route::put('/show/{slug}/actualizar-usuario', [UserController::class, 'update'])->name('updateUser');

//Compra
Route::get('/show/{slug}/seleccion-tickets', [CompraController::class, 'ticketSelection'])->name('ticketSelection');
Route::post('/show/{slug}/seleccion-asientos', [CompraController::class, 'seatSelection'])->name('seatSelection');
Route::post('/show/{slug}/pagar', [CompraController::class, 'pagar'])->name('pagar');

//Paypal
Route::post('/show/{slug}/paypal', [PayController::class, 'pagar'])->name('paypal');