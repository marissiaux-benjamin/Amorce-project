<?php

namespace App\Livewire\Comptes;

use App\Livewire\forms\TransactionsForm;
use App\Models\Compte;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $comptes;

    public $compte;
    public $search;

    public $transaction;

    public $feedback;

    public TransactionsForm $form;

    protected $listeners= ['totalAmount'=>'totalAmount'];


    public function mount(Compte $compte)
    {
        $this->comptes = Compte::all();
        $this->compte = $compte;
    }

    #[Computed]
    public function totalAmount()
    {
        return $this->comptes->mapWithKeys(function ($compte) {
            return [$compte->id => $compte->transactions->sum('montant')];
        });
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
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

    public function render()
    {
        return view('livewire.comptes.show');
    }
}
