<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Component;

class DeleteAccountModal extends Component
{
    public string $text;
    public string $desc;

    public $totalAmount;

    public $compte;

    public $comptes;

    public $currentCompteName;

    public $isOpened = false;
    protected $listeners = ['openModal' => 'openModal'];

    public function mount($compte, $total)
    {
        $this->currentCompteName = $this->compte->name;
        $this->comptes = Compte::all();
        $this->compte = $compte;
        $this->totalAmount = $total;
    }

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
        $this->compte->delete();

        return $this->redirect('/comptes');
    }

    public function render()
    {
        return view('livewire.modals.delete-account-modal');
    }
}
