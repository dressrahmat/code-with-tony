<div class="max-w-7xl mx-auto flex text-white mt-10">
    <div class="w-7/12">
        Images
    </div>
    {{-- <div class="w-4/12 bg-slate-600 p-5 shadow-md rounded-md">
        <form wire:submit='save'>
            <div class="mt-3">
                <label>Upload Image</label>
                <input type="file" wire:model='photo' class="bg-slate-400">
            </div>
            <div class="mt-3">
                <x-primary-button>Upload</x-primary-button>
            </div>
        </form>
    </div> --}}
    <div class="w-4/12 bg-slate-600 p-5 shadow-md rounded-md">
        <form wire:submit="save">
            <div class="mt-3">
                <label>Upload Image</label>
                <input type="file" wire:model="photo" class="bg-slate-400">
                @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            @if ($photo)
                <img class="w-16 h-16 rounded-md" src="{{ $photo->temporaryUrl() }}" alt="">
            @endif
            <div class="mt-3">
                <button type="submit" class="bg-indigo-500 p-2">Upload</button>
            </div>
        </form>
    </div>
</div>
