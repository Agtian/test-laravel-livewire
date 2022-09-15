<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeloWorld extends Component
{
    
    public $name = 'Jelly';
    public $text = '';
    public $greeting = '';
    public $loud = false;
    public $fruits = [''];

    public function render()
    {
        return view('livewire.helo-world');
    }
}
