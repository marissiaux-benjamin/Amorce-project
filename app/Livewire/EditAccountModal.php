<?php

namespace App\Livewire;

use App\Livewire\forms\ComptesForm;
use App\Models\Compte;
use Livewire\Component;

class EditAccountModal extends Component
{
    public $feedback;
    public $compte;
    public $isOpened = false;
    protected $listeners = ['openModal' => 'openModal'];

    public function openModal(): void
    {
        $this->isOpened = true;
    }

    public function closeModal(): void
    {
        $this->isOpened = false;
    }

    public ComptesForm $form;

    public function mount(Compte $compte)
    {
        $this->compte = $compte;
        $this->form->setCompte($compte);
    }

    public function save()
    {
        $this->form->update();
        $this->feedback = "Le compte à bie n été modifié";
        $this->dispatch('accountUpdated', id: $this->compte->id);
    }

    public function render()
    {
        return view('livewire.modals.edit-account-modal');
    }
}
