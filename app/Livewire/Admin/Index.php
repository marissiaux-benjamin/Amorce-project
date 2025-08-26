<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $users;

    public function mount()
    {
        $users = User::all();
        $this->users = $users;
    }

    public function render()
    {
        return view('livewire.admin.index');
    }
}
