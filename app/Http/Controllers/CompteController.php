<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Jiri;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class CompteController extends Controller
{
    use WithPagination;
    public function index()
    {

        $comptes = Compte::all();

        $comptes = Compte::orderBy('id')->get();


        return view('comptes.index', compact('comptes'));

    }

    public function show(Compte $compte)
    {
        $transactions = $compte->transactions;
        return view('comptes.show', compact('compte', 'transactions'));
    }

    public function create()
    {

        return view('livewire.create-modal');
    }

    public function destroy(Compte $compte)
    {

        $compte->delete();

        return to_route('comptes.index');
    }
}
