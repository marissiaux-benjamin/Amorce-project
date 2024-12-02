<?php
use App\Http\Controllers\CompteController;
use Illuminate\Support\Facades\Route;

Route::get('/comptes', \App\Livewire\Comptes\Index::class)->middleware(['auth', 'verified'])->name('comptes.index');
Route::get('/comptes/{compte}', \App\Livewire\Comptes\Show::class)->middleware(['auth', 'verified'])->name('compte.show');
Route::get('/comptes/create', [CompteController::class, 'create'])->middleware(['auth', 'verified'])->name('compte.create');
