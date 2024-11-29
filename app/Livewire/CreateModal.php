<?php

namespace App\Livewire;

use Livewire\Component;

class CreateModal extends Component
{
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

    public function render()
    {
        return view('livewire.modals.create-modal');
    }
}
