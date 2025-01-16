<?php

namespace App\Livewire;

use App\Models\Compte;
use App\Models\Transaction as TransactionsAlias;
use App\Livewire\forms\TransactionsForm;
use Livewire\Component;

class DeleteTransactionModal extends Component
{

    public string $text;
    public string $desc;

    public TransactionsAlias $transaction;
    public Compte $compte;
    public $feedback;
    public TransactionsForm $form;

    public $isOpened = false;
    protected $listeners = ['openModal' => 'openModal'];

    public function openModal($id): void
    {
        $this->transaction = TransactionsAlias::find($id);
        $this->isOpened = true;
    }

    public function closeModal(): void
    {
        $this->isOpened = false;
    }

    public function mount(Compte $compte)
    {
        $this->compte = $compte;
    }

    public function delete()
    {
        $this->form->delete($this->transaction);
        $this->dispatch('transactionDeleted');
    }


    public function render()
    {
        return view('livewire.modals.delete-transaction-modal');
    }
}
