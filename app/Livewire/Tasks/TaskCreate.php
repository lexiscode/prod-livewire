<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Create Task - Prod Livewire')]
class TaskCreate extends Component
{
    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}

