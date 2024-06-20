<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/new', [ProductsController::class, 'create']);
    Route::post('/products/new', [ProductsController::class, 'store']);
    Route::get('/products/update/{id}', [ProductsController::class, 'edit']);
    Route::post('/products/update/', [ProductsController::class, 'update']);
    Route::get('/products/delete/{id}', [ProductsController::class, 'destroy']);
    Route::get('/product-types', [ProductTypeController::class, 'index'])->name('product_types.index');
    Route::get('/product-types/create', [ProductTypeController::class, 'create'])->name('product_types.create');
    Route::post('/product-types', [ProductTypeController::class, 'store'])->name('product_types.store');
});

require __DIR__ . '/auth.php';
