<div class=" basis-1/2">
    <livewire:tasks.tasks-count :tasksByStatus="$this->tasksByStatus"/>
    @if (true)
    <div>
        <div class="grid grid-cols-2 gap-3 h-fit">
            @foreach ($this->tasks as $task)
            <div class="p-5 bg-slate-200 hover:bg-slate-50 shadow-md hover:shadow-lg rounded-md h-fit">
                <div class="flex justify-between border-b-2 border-slate-900">
                    <h3 class="text-left text-2xl">{{$task->title}}</h3>
                    <div>
                        {{$task->deadline->diffForHumans()}}
                    </div>
                </div>
                <div>
                    {{$task->description}}
                </div>
                <div class="mt-2">
                    @foreach (\App\Enums\StatusType::cases() as $status)
                        <button wire:click="changeStatus({{ $task->id }}, '{{ $status->value }}')" @class([
                            'inline-flex items-center px-4 py-2 bg-white border rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150',
                            $status->color() => true
                            ])
                            
                            {{ $status->value == $task->status->value ? 'disabled' : ''}}>
                            {{ Str::of($status->value)->headline()}}
                        </button>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="my-4">
            {{$this->tasks->links()}}
        </div>
    </div>
    @endif
</div>