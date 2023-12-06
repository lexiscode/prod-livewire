<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;



#[Title('Tasks - Prod Livewire')]
class TaskIndex extends Component
{
    public $tasks;

    #[Rule('required|max:22|string')]
    public $name;

    public function mount()
    {
        $this->tasks =Task::with('user')->get();
    }

    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);

        return $this->redirect(route('tasks'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
        ->with([

            'button' => 'New Task'

        ]);
    }
}

