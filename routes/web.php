<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\InvoiceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DomainsController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\TicketsController;
use App\Http\Controllers\User\TransactionController;

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
Route::post('auth/login/attempt', [LoginController::class, 'login'])->name('auth.login.attempt');
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register/attempt', [RegisterController::class, 'register'])->name('auth.register.attempt');
Route::middleware(['auth'])->group(function () {
    Route::get('user/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('user/services', [ServicesController::class, 'index'])->name('user.services');
    Route::get('user/domains', [DomainsController::class, 'index'])->name('user.domains');
    Route::get('user/invoices', [InvoiceController::class, 'index'])->name('user.invoices');
    Route::get('user/tickets', [TicketsController::class, 'index'])->name('user.tickets');
    Route::get('user/order/summary/{vpsId}', [TransactionController::class, 'index'])->name('user.order');
    Route::post('user/order/payment', [TransactionController::class, 'payment']);
    // Route::get('user/order/payment', [TransactionController::class, 'paymentDetails'])->name('user.payment');
    Route::get('user/order/invoice', [TransactionController::class, 'invoice'])->name('user.invoice');
    Route::get('user/logout', [LoginController::class, 'logout'])->name('user.logout');
});
