<?php

use App\Http\Controllers\ProjetsController;
use Illuminate\Support\Facades\Route;

Route::get('/projets', \App\Livewire\Projets\Index::class)->middleware(['auth', 'verified'])->name('projets.index');
Route::get('/projets/{projet}', \App\Livewire\Projets\Show::class)->middleware(['auth', 'verified'])->name('projet.show');
Route::patch('/projets/{projet}/status', [ProjetsController::class, 'updateStatus'])->name('projets.updateStatus');
