<?php

namespace App\Livewire;

use App\Livewire\forms\TransactionsForm;
use App\Models\Compte;
use App\Models\Transaction as TransactionsAlias;
use Livewire\Component;

class DeleteButton extends Component
{

    public string $text;
    public TransactionsAlias $transaction;
    public Compte $compte;
    public $feedback;
    public TransactionsForm $form;

    public function render()
    {
        return view('livewire.delete-button');
    }
}
