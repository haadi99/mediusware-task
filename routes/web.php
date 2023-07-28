<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankUserController;

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
Route::post('create-user',[BankUserController::class,"create"])->name('create.user');
