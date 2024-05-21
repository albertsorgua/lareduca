<x-slot name="header">
    <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
        {{ __('Cursos') }}
    </h2>
</x-slot>

<div class="p-6 bg-color rounded shadow">
    @if (auth()->user()->role === 'admin')
        <!-- Botón para abrir modal de creación de curso -->
        <button wire:click="create()" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Crear Curso</button>
        <!-- Modal Form -->
        @if ($isModalOpen)
            <div class="mt-4 p-4 bg-white rounded shadow">
                <h1 class="text-2xl font-bold mb-4">Crear Curso</h1>
                <form wire:submit.prevent="store" class="space-y-4">
                    <input type="text" wire:model="title" placeholder="Title" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea wire:model="description" placeholder="Description" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    <select wire:model="teacher_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Seleccionar Profesor</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Save Course</button>
                    <button wire:click="closeModalPopover()" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Cancel</button>
                </form>
            </div>
        @endif
    @endif
    <!-- Listado de cursos -->
    <div class="mt-6 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Lista de Cursos</h1>
        @foreach ($courses as $course)
            <div class="mt-4 p-4 bg-gray-100 rounded shadow">
                <a href="#" wire:click.prevent="showDetails({{ $course->id }})" class="text-lg font-bold text-blue-600 hover:underline">
                    {{ $course->title }}
                </a>
                <p class="mt-2">Descripción: {{ $course->description }}</p>
                <p class="mt-2">Profesor: {{ $course->teacher->name }}</p>
                @if (auth()->user()->role === 'admin')
                    <button wire:click="edit({{ $course->id }})" class="mt-2 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-700">Edit</button>
                    <button wire:click="delete({{ $course->id }})" class="mt-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Delete</button>
                @endif
            </div>
        @endforeach
    </div>
</div>