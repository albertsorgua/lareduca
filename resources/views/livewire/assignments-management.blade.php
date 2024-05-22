<div>
    @if (auth()->user()->isTeacher() || auth()->user()->isAdmin())
        <!-- Botón para abrir el modal de creación de asignaciones -->
        <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create
            New Assignment</button>

        <!-- Modal Form -->
        @if ($isOpen)
            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <form wire:submit.prevent="store" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                    Title
                                </label>
                                <input type="text" wire:model="title" placeholder="Title"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                    Description
                                </label>
                                <textarea wire:model="description" placeholder="Description"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="due_date">
                                    Due Date
                                </label>
                                <input type="date" wire:model="due_date" placeholder="Due Date"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Save Assignment
                                </button>
                                <button wire:click="closeModal()"
                                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif

    @endif
    <!-- Listado de asignaciones -->
    @if ($assignments)
        @foreach ($assignments as $assignment)
            <a href="{{ route('assignments.show', ['course' => $assignment->course_id, 'assignmentId' => $assignment->id]) }}">
                <div class="bg-gray-200 hover:bg-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-6">
                    <h2 class="font-bold text-xl mb-2">{{ $assignment->title }}</h2>
                    <p class="text-gray-700 text-base">{{ $assignment->description }}</p>
                    <p class="text-gray-700 text-base">Due Date: {{ $assignment->due_date }}</p>
                    @if (auth()->user()->isTeacher() || auth()->user()->isAdmin())
                        <button wire:click="edit({{ $assignment->id }})"
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button wire:click="delete({{ $assignment->id }})"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    @endif
                </div>
            </a>
        @endforeach
    @endif
</div>
