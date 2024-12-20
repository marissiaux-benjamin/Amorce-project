<?php

namespace App\Livewire;

use App\Livewire\forms\ComptesForm;
use App\Models\Compte;
use Livewire\Component;

class ComptesCreate extends Component
{
    public $feedback;
    public $compte;

    public ComptesForm $form;

    public function save()
    {
        $this->form->create();
        $this->feedback = "Le compte a bien été créé !";
        $this->dispatch('accountCreated');
    }

    public function update()
    {
        $this->validate();
        $this->organization->update($this->except('compte'));
    }
}
