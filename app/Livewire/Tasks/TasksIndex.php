<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Livewire\Forms\TaskForm;

class TasksIndex extends Component
{
    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
