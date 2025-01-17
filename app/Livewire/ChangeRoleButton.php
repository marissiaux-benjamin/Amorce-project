<?php

namespace App\Livewire;

use App\Enums\UserRole;
use App\Models\User;
use Livewire\Component;

class ChangeRoleButton extends Component
{

    public User $user;

    public function save()
    {
        if ($this->user->role === UserRole::Admin->value) {
            $this->user->role = UserRole::User->value;
        } else if ($this->user->role === UserRole::User->value) {
            $this->user->role = UserRole::Admin->value;
        }
        $this->user->update();
    }

    public function render()
    {
        return view('livewire.change-role-button');
    }
}
