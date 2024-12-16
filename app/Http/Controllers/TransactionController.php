<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionStoreRequest;
use App\Models\Compte;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('livewire.comptes.show');
    }

    public function show(Compte $compte)
    {
        $transactions = Transaction::all();
        return to_route('compte.show', compact('transactions'));
    }

    public function create()
    {
        return view('livewire.modals.add-manually-modal');
    }

    public function store(TransactionStoreRequest $request)
    {
       $request->validated();
        to_route('compte.show');
    }

    public function destroy(Transaction $transactions)
    {

        $transactions->delete();

        return to_route('comptes.index');
    }
}
