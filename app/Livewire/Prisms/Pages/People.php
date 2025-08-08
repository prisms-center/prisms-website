<?php

namespace App\Livewire\Prisms\Pages;

use Livewire\Component;

class People extends Component
{
    public $active = 'faculty';
    public function render()
    {
        return view('livewire.prisms.pages.people');
    }

    public function setActive($active): void
    {
        $this->active = $active;
    }
}
