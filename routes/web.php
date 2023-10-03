<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForumController;

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
Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');
Route::get('/addForum', [ForumController::class, 'create']);
Route::post('/storeForum', [ForumController::class, 'store'])->name('forums.store');
Route::get('/forums/delete/{id}', [ForumController::class, 'delete'])->name('forums.delete');
Route::get('/forums/edit/{id}', [ForumController::class, 'edit'])->name('forums.edit');
Route::put('/forums/edit/mod/{id}', [ForumController::class, 'update'])->name('forums.update');