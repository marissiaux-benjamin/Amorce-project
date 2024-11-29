<?php

namespace App\View\Components\navigation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array  $links = [])
    {
        $this->links = [
            ['name' => 'Comptes', 'url' => '/comptes'],
            ['name' => 'Détentes', 'url' => '/détentes'],
            ['name' => 'Agenda', 'url' => '/agenda'],
            ['name' => 'Projets', 'url' => '/projets'],
            ['name' => 'Newsletter', 'url' => '/newsletter'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation.main');
    }
}
