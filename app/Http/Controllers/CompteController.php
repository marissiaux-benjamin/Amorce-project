<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Jiri;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function index()
    {

        //$comptes= Compte::all();

        $comptes = Compte::orderBy('name')
            ->paginate(5);

        return view('comptes.index', compact('comptes'));

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
