<?php

namespace App\Livewire\Projets;

use App\Models\Projet;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public $projet;
    public $feedback;

    public function mount(Projet $projet)
    {
        $this->projet = $projet;
    }


    #[On('projectUpdated')]
    public function updateProjectData($id)
    {
        $this->projet = Projet::find($id);
    }

    public function render()
    {
        return view('livewire.projets.show');
    }
}
