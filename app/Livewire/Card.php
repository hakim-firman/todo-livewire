<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Card extends Component
{
    public Task $task;
   public $class='';
   public function done (){
    dd('done');
   }
    public function render()
    {
        return view('livewire.card');
    }
}
