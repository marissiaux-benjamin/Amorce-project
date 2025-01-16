<?php

namespace App\Livewire\Projets;

use App\Models\Projet;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $status;
    public $projets;

    public function mount()
    {
        $this->projets = Projet::all();
    }

    public function updateStatus($projetId, $newStatus)
    {
        $projet = Projet::find($projetId);
        if ($projet) {
            $projet->status = $newStatus;
            $projet->save();

            $this->projets = Projet::all();

        }
    }

    #[Computed]
    public function projets()
    {
        return $this->projets()
            ->orderBy('name', 'desc')
            ->paginate(5);
    }

    public function render()
    {
        return view('livewire.projets.index');
    }
}
