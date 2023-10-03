<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WalletController;
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
    return view('index');
});

Route::get('/auth', [AuthController::class, 'index']);
Route::resource('wallets', WalletController::class);
Route::get('/wallets', [WalletController::class, 'index'])->name('wallets.index');
Route::get('/wallets/create', [WalletController::class, 'create'])->name('wallets.create');
Route::post('/wallets', [WalletController::class, 'store'])->name('wallets.store');
Route::get('/wallets/{id}', [WalletController::class, 'show'])->name('wallets.show');
Route::get('/wallets/{id}/edit', [WalletController::class, 'edit'])->name('wallets.edit');
Route::put('/wallets/{id}', [WalletController::class, 'update'])->name('wallets.update');
Route::delete('/wallets/{id}', [WalletController::class, 'destroy'])->name('wallets.destroy');


