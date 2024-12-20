<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Component;

class NewTransferModal extends Component
{
    public $isOpened = false;
    public $comptes;
    protected $listeners = ['openModal' => 'openModal'];

    public function mount()
    {
        $this->comptes = Compte::all();
    }

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
        return view('livewire.modals.new-transfer-modal');
    }
}
