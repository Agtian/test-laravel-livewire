<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifecycleHooks extends Component
{
    public $name = 'Ricky';

    public function mount($name)
    {
        $this->name = $name;
    }

    public function updatedName($name)
    {
        $this->name = strtoupper($name);
    }

    public function render()
    {
        return view('livewire.lifecycle-hooks');
    }
}
