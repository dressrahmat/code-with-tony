<div class="text-white">
    <h3>Task</h3>
    <form wire:submit="add">
        <input type="text" wire:model="task" class="text-black">
        <button class="bg-indigo-500 p-2">Add</button>
    </form>
    <ul>
        @foreach ($tasks as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
