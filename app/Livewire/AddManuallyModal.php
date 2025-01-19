<?php

namespace App\Livewire;

use App\Livewire\forms\TransactionsForm;
use App\Models\Compte;
use Livewire\Component;

class AddManuallyModal extends Component
{
    public Compte $compte;
    public $isOpened = false;
    public $feedback;
    public TransactionsForm $form;
    public $currentAccount;
    protected $listeners = ['openModal' => 'openModal'];


    public function openModal(): void
    {
        $this->isOpened = true;
    }

    public function closeModal(): void
    {
        $this->isOpened = false;
    }

    public function save(Compte $compte)
    {
        $this->compte = $compte;
        $compte->transactions()->create();
        $this->feedback = "La transaction a bien été créée !";
        $this->dispatch('transactionCreated');
    }

    public function render()
    {
        return view('livewire.modals.add-manually-modal');
    }
}
