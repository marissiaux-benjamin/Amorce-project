<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class CompteDetails extends Component
{
    public $comptesData;

    public $compte;

    public $total;
    private $id;

    public function mount(Compte $compte)
    {
        $this->comptesData = Compte::all();
        $this->compte = $compte;
        $this->id = $compte->id;
        $this->total = $this->compte->transactions->sum('montant');
    }

    #[On('accountUpdated')]
    public function updateAccountData($id)
    {
        $this->compte = Compte::find($id);
    }

    #[On('totalAmountUpdated')]
    public function updateTotal($total)
    {
        $this->total = $total;
    }

    public function render()
    {
        return view('livewire.compte-details', [
            'total' => $this->total,
        ]);
    }
}
