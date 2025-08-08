<?php

namespace App\Livewire\Prisms\Pages;

use Livewire\Component;

class Codes extends Component
{
    public $active = 'overview';
    public function render()
    {
        return view('livewire.prisms.pages.codes');
    }

    public function setActive($active): void
    {
        $this->active = $active;
    }
}
