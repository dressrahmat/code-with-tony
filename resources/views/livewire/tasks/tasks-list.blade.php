<div class=" basis-1/2">
    <livewire:tasks.tasks-count :$tasksByStatus/>
    <div class="grid grid-cols-2 gap-3 h-fit">
        @foreach ($tasks as $task)
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
        </div>
        @endforeach
    </div>
    <div class="my-4">
        {{$tasks->links()}}
    </div>
</div>