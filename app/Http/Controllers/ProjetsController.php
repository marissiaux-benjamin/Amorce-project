<?php

namespace App\Http\Controllers;

use App\Models\Projet;

class ProjetsController extends Controller
{
    public function index()
    {

        $projets = Projet::all();

        return view('livewire.projets.index', compact('projets'));

    }

    public function destroy(Projet $projet)
    {

        $projet->delete();

        return to_route('projets.index');
    }

    public function create()
    {
        return view('livewire.modals.add-projet-modal');

    }


}
