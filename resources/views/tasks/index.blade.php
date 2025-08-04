<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Tasks') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <a href="{{ route('tasks.create') }}"
           class="inline-block mb-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Add Task</a>

        <!-- Search and Filter Form -->
        <form method="GET" action="{{ route('tasks.index') }}" class="mb-4 flex flex-wrap gap-2 items-center">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search tasks..."
                   class="border rounded px-3 py-2" />
            <select name="status" class="border rounded px-3 py-2">
                <option value="">All Statuses</option>
                <option value="Not Started" {{ request('status') == 'Not Started' ? 'selected' : '' }}>Not Started</option>
                <option value="Ongoing" {{ request('status') == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="Complete" {{ request('status') == 'Complete' ? 'selected' : '' }}>Complete</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Filter</button>
            <a href="{{ route('tasks.index') }}" class="text-gray-600 underline ml-2">Reset</a>
        </form>

        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td class="border px-4 py-2">{{ $task->title }}</td>
                    <td class="border px-4 py-2">
                        <span class="@if($task->status == 'Complete') text-green-600 @elseif($task->status == 'Ongoing') text-yellow-600 @else text-gray-600 @endif">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td class="border px-4 py-2">{{ $task->description }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('tasks.edit', $task) }}"
                           class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline ml-2"
                                    onclick="return confirm('Delete this task?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </x-app-layout> 