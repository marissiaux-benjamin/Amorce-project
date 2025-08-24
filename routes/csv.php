<?php
use App\Http\Controllers\CompteController;
use App\Livewire\Admin\Index;
use Illuminate\Support\Facades\Route;

Route::get('/import-csv', Index::class)->middleware(['auth', 'verified'])->name('admin.index');
