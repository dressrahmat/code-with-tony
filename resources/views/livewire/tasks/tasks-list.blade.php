<div class="grid grid-cols-2 basis-1/2 gap-3">
    @foreach ($tasks as $task)
    <div class="p-5 bg-slate-200 hover:bg-slate-50 shadow-md hover:shadow-lg rounded-md">
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