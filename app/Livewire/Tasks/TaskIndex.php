<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Tasks - Prod Livewire')]
class TaskIndex extends Component
{
    public function render()
    {
        return view('livewire.tasks.task-index');
    }
}
