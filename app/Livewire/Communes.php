<?php

namespace App\Livewire;

use Livewire\Component;

class Communes extends Component
{
    public $emp_name;
    public $emp_emai;
    
    public function render()
    {
        return view('livewire.communes');
    }
}
