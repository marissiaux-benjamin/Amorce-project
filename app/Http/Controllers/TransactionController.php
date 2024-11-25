<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionStoreRequest;
use App\Models\Compte;
use App\Models\Transactions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('comptes.show');
    }

    public function show(Compte $compte)
    {
        $transactions = Transactions::all();
        return to_route('compte.show', compact('transactions'));
    }

    public function create()
    {
        return view('livewire.create-account-modal');
    }

    public function store(TransactionStoreRequest $request)
    {
       $request->validated();
        to_route('compte.show');
    }

    public function destroy(Transactions $transactions)
    {

        $transactions->delete();

        return to_route('comptes.index');
    }
}
