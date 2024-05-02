<div>
    <button wire:click="create()">Create New Assignment</button>
    @if($isOpen)
    @include('livewire.create_assignment')
    @endif
    @foreach($assignments as $assignment)
    <div>
        <h2>{{ $assignment->title }}</h2>
        <p>{{ $assignment->description }}</p>
        <p>Due Date: {{ $assignment->due_date }}</p>
        <button wire:click="edit({{ $assignment->id}})">Edit</button>
        <button wire:click="delete({{ $assignment->id}})">Delete</button>
    </div>
    @endforeach
</div>