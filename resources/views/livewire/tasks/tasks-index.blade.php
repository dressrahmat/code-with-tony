<div class="flex justify-center items-center mt-5">
    <form wire:submit="save" class="w-1/3">
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" wire:model="title" id="title" class="w-full h-12 rounded-md">
        </div>

        <!-- Slug -->
        <div class="mb-3">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" wire:model="slug" id="slug" class="w-full h-12 rounded-md">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea type="text" wire:model="description" id="description" class="w-full rounded-md" rows="3"></textarea>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <select wire:model="status" id="status" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @foreach (\App\Enums\StatusType::cases() as $status)
                <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Priority -->
        <div class="mb-3">
            <label for="priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
            <select wire:model="priority" id="priority" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @foreach (\App\Enums\PriorityType::cases() as $status)
                <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Deadline -->
        <div class="mb-3">
            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
            <input type="date" wire:model="deadline" id="" class="w-full h-12 rounded-md">
        </div>

        <!-- Deadline -->
        <div class="mb-3">
            <button type="submit" class="bg-indigo-500 p-2 rounded-lg w-full text-white">Save</button>
        </div>

    </form>
</div>
