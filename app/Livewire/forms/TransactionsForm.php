<?php

namespace App\Livewire\forms;

use App\Models\Transaction;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TransactionsForm extends Form
{
    public $transactions;

    #[Validate]
    public $communication;
    #[Validate]
    public $date;
    #[Validate]
    public $montant;

    public function rules()
    {
        return [
            'date' => ["required","date"],
            'montant' => ["required", "numeric"],
            'communication' => ["required", "max:100"],
        ];
    }

    protected $messages = [

        'date.required' => 'Une date est requis.',
        'communication.required' => 'Une communication est requise.',
        'communication.max' => 'Votre message est trop long, veuillez le raccourcir.',
        'montant.required' => 'Un montant est requis.',

    ];

    public function create()
    {
        $this->validate();
        $this->date = strtotime($this->date);
        Transaction::create($this->all());
    }

    public function delete(Transaction $transaction)
    {
        $transaction->delete();
    }
}
