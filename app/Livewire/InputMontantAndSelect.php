<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Component;

class InputMontantAndSelect extends Component
{
    public $totalAmount;

    public $compte;

    public $comptes;

    public $currentCompteName;


    public function mount($compte)
    {
        $this->currentCompteName = $this->compte->name;
        $this->comptes = Compte::all();
        $this->compte = $compte;
    }

    public function render()
    {
        return view('livewire.input-montant-and-select');
    }
}
