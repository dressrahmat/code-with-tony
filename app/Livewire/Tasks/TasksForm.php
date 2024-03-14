<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Livewire\Forms\TaskForm;

class TasksForm extends Component
{
    public TaskForm $form;

    public function save()
    {
        $this->validate();

        $this->form->createTask();
        $this->dispatch('task-created', title: $this->form->title);
        $this->form->reset();
    }
    
    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
