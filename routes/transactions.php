<?php

use App\Models\Transactions;

Route::delete('/comptes/{compte}', [Transactions::class, 'destroy'])->middleware(['auth', 'verified'])->name('transaction.destroy');
Route::post('/comptes/{compte}', [Transactions::class, 'store'])->middleware(['auth', 'verified'])->name('transaction.store');
