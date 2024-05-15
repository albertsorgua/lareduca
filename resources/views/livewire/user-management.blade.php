<style>
    .bg-color {
        margin: 0;
        line-height: inherit;
        background-color: #ECB3B3;
        font-family: 'Macondo', cursive;
    }
</style>
<x-slot name="header">
    <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
        {{ __('Usuarios') }}
    </h2>
</x-slot>
<div class="p-6 bg-color rounded shadow">
    <div class="p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">User Management</h1>
        <form wire:submit.prevent="store" class="space-y-4">
            <input type="text" wire:model="name" placeholder="Name" required
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="email" wire:model="email" placeholder="Email" required
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select wire:model="selectedRoleId"
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Create
                User</button>
        </form>
    </div>

    <div class="mt-6 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>
        <div >
            @foreach ($users as $user)
                <div class="mt-4 p-4 bg-gray-100 rounded shadow">
                    <p class="font-medium">{{ $user->name }} - {{ $user->email }} - {{ $user->role }}</p>
                    @if (auth()->user()->role === 'admin')
                        <button wire:click="edit({{ $user->id }})"
                            class="mt-2 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-700">Edit</button>
                        <button wire:click="delete({{ $user->id }})"
                            class="mt-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Delete</button>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
