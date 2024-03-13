<div class="flex justify-center items-center mt-5">
    <form class="w-1/3">
        <div class="mb-3">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" name="" id="" class="w-full h-12 rounded-md">
        </div>
        <div class="mb-3">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" name="" id="" class="w-full h-12 rounded-md">
        </div>
        <div class="mb-3">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea type="text" name="" id="" class="w-full rounded-md" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <select name="" id="" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @foreach (\App\Enums\StatusType::cases() as $status)
                <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
            <select name="" id="" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @foreach (\App\Enums\PriorityType::cases() as $status)
                <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

    </form>
</div>
