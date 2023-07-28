<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankUserController;
use App\Http\Controllers\AdminController;

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

Route::get('create-user',[BankUserController::class,"index"])->name('add.user');
Route::post('add-user',[BankUserController::class,"create"])->name('create.user');
Route::get('/user-login',[BankUserController::class,"loginShow"])->name('login.user');
Route::post('/user-login',[BankUserController::class,"userLogin"])->name('user.login');
Route::middleware(['bankUserAuth'])->group(function () {
    Route::get('/user-dashboard', [BankUserController::class, "dashboard"])->name('user-dashboard');
    Route::get('deposit', [BankUserController::class, "depositView"])->name('deposit-view');
    Route::post('deposit', [BankUserController::class, "deposit"])->name('deposit');
    Route::get('/transaction', [BankUserController::class, 'transactionShow'])->name('transaction-show');
    Route::post('/transaction', [BankUserController::class, 'transaction'])->name('transaction');
    Route::get('/deposit/{id}', [BankUserController::class, 'depositTransaction'])->name('deposit.transaction');
    Route::get('/withdrawal/{id}', [BankUserController::class, 'withdrawTransaction'])->name('withdraw.transaction');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

});
