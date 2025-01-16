<?php

use App\Http\Controllers\ProjetsController;
use App\Livewire\Projets\Index;
use App\Livewire\Projets\Show;
use Illuminate\Support\Facades\Route;

Route::get('/projets', Index::class)->middleware(['auth', 'verified'])->name('projets.index');
Route::get('/projets/{projet}', Show::class)->middleware(['auth', 'verified'])->name('projet.show');
Route::get('/projets/{projet}/status', [ProjetsController::class, 'updateStatus'])->name('projets.updateStatus');
