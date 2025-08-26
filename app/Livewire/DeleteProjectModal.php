<?php

namespace App\Livewire;

use App\Models\Projet;
use Livewire\Component;

class DeleteProjectModal extends Component
{

    public $projet;
    public $feedback;
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

    public function delete()
    {
        $this->projet->delete();

        return redirect('/projets');
    }

    public function render()
    {
        return view('livewire.modals.delete-project-modal');
    }
}
