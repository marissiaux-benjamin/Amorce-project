<?php

namespace App\Livewire;

use App\Livewire\forms\ComptesForm;
use Livewire\Component;

class AddAccountModal extends Component
{
    public $feedback;
    public $compte;
    public $isOpened = false;
    public ComptesForm $form;
    protected $listeners = ['openModal' => 'openModal'];

    public function openModal(): void
    {
        $this->isOpened = true;
    }

    public function closeModal(): void
    {
        $this->isOpened = false;
    }

    public function save()
    {
        $this->form->create();
        $this->feedback = "Le compte a bien été créé !";
    }

    public function render()
    {
        return view('livewire.modals.add-account-modal');
    }
}
