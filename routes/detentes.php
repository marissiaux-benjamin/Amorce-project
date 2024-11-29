<?php
use App\Http\Controllers\CompteController;
use Illuminate\Support\Facades\Route;

Route::get('/détentes', \App\Livewire\Detentes\Index::class)->middleware(['auth', 'verified'])->name('detentes.index');
