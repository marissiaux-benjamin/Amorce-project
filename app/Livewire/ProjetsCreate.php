<?php

namespace App\Livewire;

use App\Livewire\forms\ProjetForm;
use Livewire\Component;

class ProjetsCreate extends Component
{

    public $feedback;
    public $projet;

    public ProjetForm $form;

    public function save()
    {
        $this->form->create();
        $this->feedback = "Le projet a bien été créé !";
        $this->dispatch('projetCreated');
    }


    public function render()
    {
        return view('livewire.projets-create');
    }
}
