<?php

namespace App\Livewire;

use Livewire\Component;

class BackButton extends Component
{
    public string $route;

    public function render()
    {
        return view('livewire.back-button');
    }
}
