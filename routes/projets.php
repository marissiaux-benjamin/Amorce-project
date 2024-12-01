<?php
use Illuminate\Support\Facades\Route;

Route::get('/projets', \App\Livewire\Projets\Index::class)->middleware(['auth', 'verified'])->name('projets.index');
