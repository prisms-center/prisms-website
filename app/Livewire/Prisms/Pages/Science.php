<?php

namespace App\Livewire\Prisms\Pages;

use Livewire\Component;

class Science extends Component
{

    public $active = 'overview';

    public function render()
    {
        return view('livewire.prisms.pages.science');
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}
