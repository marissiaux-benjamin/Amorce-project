<?php

namespace App\Livewire;

use App\Livewire\forms\ComptesForm;
use App\Models\Compte;
use Livewire\Component;

class CompteEdit extends Component
{
    public $compte;
    public $feedback;

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
    }

}
