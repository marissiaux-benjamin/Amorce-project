<?php
use App\Http\Controllers\CompteController;
use Illuminate\Support\Facades\Route;

Route::get('/comptes', [CompteController::class, 'index'])->middleware(['auth', 'verified'])->name('comptes.index');
Route::get('/comptes/{compte}', [CompteController::class, 'show'])->middleware(['auth', 'verified'])->name('compte.show');
Route::get('/comptes/create', [CompteController::class, 'create'])->middleware(['auth', 'verified'])->name('compte.create');
Route::delete('/comptes/{compte}', [CompteController::class, 'destroy'])->middleware(['auth', 'verified'])->name('compte.destroy');
