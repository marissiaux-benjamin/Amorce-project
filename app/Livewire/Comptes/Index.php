<?php

namespace App\Livewire\Comptes;

use App\Models\Compte;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class  Index extends Component
{
    public $comptes;
    public function mount()
    {
        $this->comptes = Compte::all();
    }

    #[Computed]
    public function totalAmount()
    {
        return $this->comptes->mapWithKeys(function ($compte) {
            return [$compte->id => $compte->transactions->sum('montant')];
        });
    }

    #[On('accountCreated')]
    public function createNewAccount()
    {
        $this->comptes = Compte::all();
    }

    public function render()
    {
        return view('livewire.comptes.index');
    }
}
