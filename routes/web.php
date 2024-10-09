<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\InvoiceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;

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

Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
Route::get('user/invoices', [InvoiceController::class, 'index'])->name('user.invoices');
