<?php

namespace App\Livewire\Prisms\Navs;

use Livewire\Component;

class Science extends Component
{

    public $active = 'overview';
    public function render()
    {
        return view('livewire.prisms.navs.science');
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}
