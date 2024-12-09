<?php

use App\Models\Transactions;

Route::delete('/comptes', \App\Livewire\Transactions::class)->middleware(['auth', 'verified'])->name('transaction.destroy');
Route::post('/comptes/{compte}', [Transactions::class, 'store'])->middleware(['auth', 'verified'])->name('transaction.store');
