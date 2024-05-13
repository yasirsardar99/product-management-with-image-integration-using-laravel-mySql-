<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

// Route::view('/about-us','about')->name('about');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/user', [UserController::class,'showUser']);

Route::get('/', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('product/{id}/edit', [ProductController::class,'edit']);

// while edit you have to use put or patch method 
Route::put('/product/{id}/update', [ProductController::class,'update']);

// while delete you have to use get method
Route::get('/product/{id}/delete', [ProductController::class,'destroy']);


