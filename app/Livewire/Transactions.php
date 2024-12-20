<?php

namespace App\Livewire;

use App\Models\Compte;
use App\Models\Transaction;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Transactions extends Component
{
    use WithPagination;

    public $search;
    public $compte;

    public $transaction;

    protected $listeners = ['transactionDeleted'=>'transactionDeleted'];
    public string $feedback;


    public function mount(Compte $compte)
    {
        $this->compte = $compte;
    }

    #[Computed]
    public function transactions()
    {
        return $this->compte
            ->transactions()
            ->filter(['search' => $this->search])
            ->orderBy('date', 'desc')
            ->paginate(10);
    }

    public function transactionDeleted()
    {
        $this->feedback = "La transactions a bien été supprimée !";
        $this->dispatch('totalAmount');
    }



    public function render()
    {
        return view('livewire.transactions');
    }
}
