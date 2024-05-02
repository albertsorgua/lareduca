<div>
    <!-- Botón para abrir modal de creación de curso -->
    <button wire:click="create()">Create Course</button>
    <!-- Modal Form -->
    @if($isModalOpen)
    <div>
        <form wire:submit.prevent="store">
            <input type="text" wire:model="title" placeholder="Title">
            <textarea wire:model="description" placeholder="Description"></textarea>
            <button type="submit">Save Course</button>
            <button wire:click="closeModalPopover()">Cancel</button>
        </form>
    </div>
    @endif
    <!-- Listado de cursos -->
    @foreach($courses as $course)
    <div>
        <h4>{{ $course->title }}</h4>
        <p>{{ $course->description }}</p>
        <button wire:click="edit({{ $course->id }})">Edit</button>
        <button wire:click="delete({{ $course->id }})">Delete</button>
    </div>
    @endforeach
</div>