<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class InputText extends Component
{


    public $type="text";
    public $placeHolder="This Is Input";
    public $variant="primary";
    public $size='sm';
    public $class='';
    public function render()
    {
        return view('livewire.input-text');
    }
}
