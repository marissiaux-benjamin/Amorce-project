<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Jiri;
use App\Models\Transactions;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function index()
    {

        $comptes = Compte::all();

        $comptes = Compte::orderBy('name')
            ->paginate(5);


        return view('comptes.index', compact('comptes'));

    }

    public function show(Compte $compte)
    {
        $transactions = Transactions::all(); //mettre les transactions liées au compte.
        return view('comptes.show', compact('compte', 'transactions'));
    }

    public function create()
    {

        return view('livewire.create-account-modal');
    }

    public function destroy(Compte $compte)
    {

        $compte->delete();

        return to_route('comptes.index');
    }
}
