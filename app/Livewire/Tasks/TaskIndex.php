<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Tasks - Prod Livewire')]
class TaskIndex extends Component
{
    public $tasks;

    public function mount()
    {
        $this->tasks =Task::with('user')->get();
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
        ->with([

            'button' => 'New Task'

        ]);
    }
}

