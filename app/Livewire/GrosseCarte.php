<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class GrosseCarte extends Component
{

    public $comptesData;

    public $comptes;

    public $compte;

    public $total;


    public function mount(Compte $compte)
    {
        $this->comptesData = Compte::all();
        $this->compte = $compte;
    }

    public function render()
    {
        return view('livewire.grosse-carte');
    }
}
