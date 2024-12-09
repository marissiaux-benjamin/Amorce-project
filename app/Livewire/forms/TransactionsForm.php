<?php

namespace App\Livewire\forms;

use App\Models\Transactions;
use Livewire\Form;

class TransactionsForm extends Form
{
    public $transactions;

    public function delete(Transactions $transaction)
    {
        return $transaction->delete();
    }
}
