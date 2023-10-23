<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\OffreController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ContractController;


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
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/addProduct', [ProductController::class, 'addProduct']);
Route::post('/storeProduct', [ProductController::class, 'storeProduct'])->name('products.store');
Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/edit/mod/{id}', [ProductController::class, 'update'])->name('products.update');






//offres
Route::get('/offres', [OffreController::class, 'index'])->name('offres');
Route::get('/offre/create',[OffreController::class,'create'])->name('createoffre');
Route::post('/offre/store',[OffreController::class,'store'])->name('storeoffre');
Route::delete('/offre/delete/{id}',[OffreController::class,'destroy'])->name('offers.destroy');
Route::get('/offre/edit/{id}',[OffreController::class,'edit'])->name('offers.edit');
Route::put('/offre/put/{id}',[OffreController::class,'put'])->name('offers.put');

//Inventory
// Route::get('/inventories', 'InventoryController@index');

Route::get('/inventories', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/inventory/create',[InventoryController::class,'create'])->name('inventory.create');
Route::post('/inventory/store',[InventoryController::class,'store'])->name('storeinventory');
Route::delete('/inventory/delete/{id}', [InventoryController::class, 'destroy'])->name('inventories.destroy');

Route::get('/inventory/edit/{id}',[InventoryController::class,'edit'])->name('inventories.edit');
Route::put('/inventory/put/{id}',[InventoryController::class,'put'])->name('inventories.put');

// Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories');

Route::resource('/contract', ContractController::class);
