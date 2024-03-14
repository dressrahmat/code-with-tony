<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Rule;
use Livewire\Form;

class TaskForm extends Form
{
    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $slug;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $status;

    #[Rule('required')]
    public $priority;

    #[Rule('required')]
    public $deadline;

    public function createTask()
    {
        auth()->user()->tasks()->create($this->all());
        request()->session()->flash('success', __('Task created successfully.'));
    }
}
