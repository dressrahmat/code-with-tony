<div class="basis-2/5 h-fit bg-slate-600 text-slate-900 p-5 rounded-md">
    <div class="text-center mb-5">
        <h5 class="text-4xl text-white">Welcome, <span class="text-purple-400">{{ucfirst(auth()->user()->name)}}</span></h5>
        <p class="text-slate-50">{{ucwords('Ini adalah tugas anda untuk membuat sebuah task')}}</p>
    </div>

    <div>
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>
    
    <form wire:submit="save">
        <!-- Title -->
        <div class="mb-3">
            <label for="form.title"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" wire:model.live="form.title" id="form.title" class="w-full h-12 rounded-md">
            <div>
                @error('form.title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Slug -->
        <div class="mb-3">
            <label for="form.slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" wire:model="form.slug" id="form.slug" class="w-full h-12 rounded-md">
            <div>
                @error('form.slug') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="form.description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea type="text" wire:model="form.description" id="form.description" class="w-full rounded-md"
                rows="3"></textarea>
            <div>
                @error('form.description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex justify-between w-full">
            <!-- Status -->
            <div class="mb-3 basis-1/3">
                <label for="form.status"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select wire:model="form.status" id="form.status"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                    @foreach (\App\Enums\StatusType::cases() as $status)
                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                    @endforeach
                </select>
                <div>
                    @error('form.status') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Priority -->
            <div class="mb-3 basis-1/3">
                <label for="form.priority"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
                <select wire:model="form.priority" id="form.priority"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                    @foreach (\App\Enums\PriorityType::cases() as $priority)
                    <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                    @endforeach
                </select>
                <div>
                    @error('form.priority') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Deadline -->
        <div class="mb-3">
            <label for="form.deadline"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
            <input type="date" wire:model="form.deadline" id="" class="w-full h-12 rounded-md">
            <div>
                @error('form.deadline') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Deadline -->
        <div class="mb-3">
            <button type="submit" class="bg-indigo-500 p-2 rounded-lg w-full text-white">
                Save
                <div wire:loading class="w-10 h-10 my-auto">
                    <i class="fa-solid fa-spinner fa-spin-pulse text-white"></i>
                </div>
            </button>
        </div>

    </form>
</div>