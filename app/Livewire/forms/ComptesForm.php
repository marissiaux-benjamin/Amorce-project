<?php

namespace App\Livewire\forms;

use App\Models\Compte;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ComptesForm extends Form
{
    public $compte;
    #[Validate]
    public $name;
    #[Validate]
    public $description;

    public function setCompte(Compte $compte)
    {
        $this->compte = $compte;
        $this->name = $compte->name;
        $this->description = $compte->description;
    }

    public function rules()
    {
        return [
            "name" => ["required", "max:100"],
            "description" => ["max:500"],
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

    public function update()
    {
        $this->validate();
        $this->compte->update($this->all());
    }

}
