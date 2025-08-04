<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <form method="POST" action="{{ route('tasks.update', $task) }}" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block mb-1">Title</label>
                <input type="text" name="title" value="{{ $task->title }}" required class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Description</label>
                <textarea name="description" class="w-full border rounded px-3 py-2">{{ $task->description }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Status</label>
                <select name="status" class="w-full border rounded px-3 py-2">
                    <option {{ $task->status == 'Not Started' ? 'selected' : '' }}>Not Started</option>
                    <option {{ $task->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option {{ $task->status == 'Complete' ? 'selected' : '' }}>Complete</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </form>
    </div>
</x-app-layout>