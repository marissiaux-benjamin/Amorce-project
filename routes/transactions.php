<?php

use App\Models\Transaction;

Route::delete('/comptes', \App\Livewire\Transactions::class)->middleware(['auth', 'verified'])->name('transaction.destroy');
Route::post('/comptes/{compte}', [Transaction::class, 'store'])->middleware(['auth', 'verified'])->name('transaction.store');
