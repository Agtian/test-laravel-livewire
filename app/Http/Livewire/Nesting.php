<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Nesting extends Component
{
    public $name;
    public $names = ['Rian', 'Riris', 'Tom'];

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.nesting');
    }
}
