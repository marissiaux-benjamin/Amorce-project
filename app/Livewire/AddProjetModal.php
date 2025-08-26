<?php

namespace App\Livewire;

use App\Livewire\forms\ProjetForm;
use Livewire\Component;

class AddProjetModal extends Component
{
    public $status;
    public $feedback;
    public $projet;
    public $isOpened = false;
    public ProjetForm $form;

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
        $this->feedback = "Le projet a bien été créé !";
        $this->dispatch('projetCreated');
    }

    public function render()
    {
        return view('livewire.modals.add-projet-modal');
    }
}
