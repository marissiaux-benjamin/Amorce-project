<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    public function index()
    {

       $projets = Projets::all();

        return view('livewire.projets.index', compact('projets'));

    }
}
