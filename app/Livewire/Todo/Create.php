<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Component;

class Create extends Component
{
   public $task='';
   public function store (){
    $task=Task::create([
        'task'=>$this->task
    ]);
    $this->dispatch('taskCreated',true);
    $this->reset();
   }
    public function render()
    {
        return view('livewire.todo.create');
    }
}
