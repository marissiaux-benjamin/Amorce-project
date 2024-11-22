<?php

use App\Http\Controllers\CompteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptes', [CompteController::class, 'index'])->middleware(['auth', 'verified'])->name('comptes.index');
Route::get('/comptes/create', [CompteController::class, 'create'])->middleware(['auth', 'verified'])->name('compte.create');
Route::delete('/comptes/{compte}', [CompteController::class, 'destroy'])->middleware(['auth', 'verified'])->name('compte.destroy');

Route::get('/comptes/{compte}', [CompteController::class, 'show'])->middleware(['auth', 'verified'])->name('compte.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
