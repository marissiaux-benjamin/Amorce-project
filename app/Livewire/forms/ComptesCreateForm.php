<?php

namespace App\Livewire\forms;

use App\Models\Compte;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ComptesCreateForm extends Form
{
    public $name;
    #[Validate]
    public $description;

    #[Validate]
    public function setCompte(Compte $compte)
    {
        $this->name = $compte->name;
        $this->description = $compte->description;
    }

    public function rules()
    {
        return [
            "name" => ["required", "max:100"],
            "description" => ["required", "max:500"],
        ];
    }

    protected $messages = [

        'name.required' => 'Un nom de compte est requis.',
        'name.max' => 'Le nom du compte est trop long, veuillez le raccourcir',
        'description.required' => 'Une description est requise.',
        'description.max' => 'Votre message est trop long, veuillez le raccourcir.',

    ];

    public function create()
    {
        $this->validate();
        Compte::create($this->all());
    }
}
