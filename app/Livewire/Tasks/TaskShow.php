<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskShow extends Component
{
    public Task $task;

    /*
    public function mount($id)
    {
        $this->task = Task::findOrFail($id);
    }
    or alternatively below
    */
    public function mount(Task $task)
    {
        $this->task = $task;
    }


    public function render()
    {
        return view('livewire.tasks.task-show');
    }
}
