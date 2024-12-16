<?php

namespace App\Livewire\forms;

use App\Models\Transaction;
use Livewire\Attributes\On;
use Livewire\Form;

class TransactionsForm extends Form
{
    public $transactions;


    public function delete(Transaction $transaction)
    {
        $transaction->delete();
        //apres la suppression faire qqchose. c'est ici qu'on le fait.
    }
}
