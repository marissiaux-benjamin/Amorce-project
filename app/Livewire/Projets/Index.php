<?php

namespace App\Livewire\Projets;

use App\Models\Projet;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $status;
    public $projets;
    public $search;


    public function mount()
    {
        $this->projets = Projet::orderBy('name','asc')->get();
    }

    public function updateStatus($projetId, $newStatus)
    {
        $projet = Projet::find($projetId);
        if ($projet) {
            $projet->status = $newStatus;
            $projet->save();
            $this->projets = Projet::orderBy('name','asc')->get();
        }
    }

    #[On('projetCreated')]
    public function displayProjectCreated()
    {
        $this->projets = Projet::all();
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    #[Computed]
    public function searchProjects()
    {
        return $this->projets
            ->searchProject()
            ->filter(['search' => $this->search])
            ->paginate(10)
            ->orderBy('name','asc');
    }

    public function render()
    {
        return view('livewire.projets.index', ['projets' => $this->projets,]);
    }
}
