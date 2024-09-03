<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $type="button";
    public $label="button";
    public $variant="primary";
    public $size='sm';
    public function render()
    {
        return view('livewire.button');
    }
}
