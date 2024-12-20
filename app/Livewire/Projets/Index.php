<?php

namespace App\Livewire\Projets;

use App\Models\Projets;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $projets;

    public function mount()
    {
        $this->projets = Projets::all();
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
