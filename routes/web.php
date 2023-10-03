<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OffreController;
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
Route::get('/products', [ProductController::class, 'index']);



//offres
Route::get('/offres', [OffreController::class, 'index'])->name('offres');
Route::get('/offre/create',[OffreController::class,'create'])->name('createoffre');
Route::post('/offre/store',[OffreController::class,'store'])->name('storeoffre');
Route::delete('/offre/delete/{id}',[OffreController::class,'destroy'])->name('offers.destroy');
Route::get('/offre/edit/{id}',[OffreController::class,'edit'])->name('offers.edit');
Route::put('/offre/put/{id}',[OffreController::class,'put'])->name('offers.put');


