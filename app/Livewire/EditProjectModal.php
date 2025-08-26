<?php

namespace App\Livewire;

use App\Livewire\forms\ProjetForm;
use App\Models\Projet;
use Livewire\Component;

class EditProjectModal extends Component
{
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

    public function mount(Projet $projet)
    {
        $this->projet = $projet;
        $this->form->setProjects($projet);
    }

    public function save()
    {
        $this->form->update();
        $this->feedback = "Le projet à bien été modifié";
        $this->dispatch('projectUpdated', id: $this->projet->id);
    }

    public function render()
    {
        return view('livewire.modals.edit-project-modal');
    }
}
