<?php

namespace App\Livewire\forms;

use App\Models\Projet;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjetForm extends Form
{

    public $projet;
    #[Validate]
    public $name;
    #[Validate]
    public $description;
    public $status;

    public $search;

    public function setProjects(Projet $projets)
    {
        $this->projet = $projets;
        $this->name = $projets->name;
        $this->description = $projets->description;
        $this->status = $projets->status;
    }

    public function rules()
    {
        return [
            'name' => ["required", "max:100"],
            'description' => ["required", "max:500"],
        ];
    }

    protected $messages = [

        'name.required' => 'Un nom de projet est requis.',
        'name.max' => 'Le nom du projet est trop long, veuillez le raccourcir',
        'description.required' => 'Une description est requise.',
        'description.max' => 'Votre message est trop long, veuillez le raccourcir.',

    ];

    public function create()
    {
        $this->validate();
        Projet::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->projet->update($this->all());
    }

    public function delete(Projet $projet)
    {
        $projet->delete();
    }
}
