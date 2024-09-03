<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo App')]
class Index extends Component
{

    public $newData = false;

    #[On('taskCreated')]
    public function updateList($task){
        if ($task) $this->newData = true;
    }

    public function getData()
    {
        return Task::orderBy('created_at','desc')->get();
    }

    public function render()
    {
        $tasks = $this->getData();

        if ($this->newData) {
            $this->getData();
        }

        return view('livewire.todo.index', compact('tasks'));
    }
}
