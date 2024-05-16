<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserManagement extends Component
{
    public $users, $roles, $userId, $name, $email, $selectedRoleId;
    public function mount()
    {
        $this->users = User::all();
        $this->roles = Role::all();
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->selectedRoleId = '';
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->selectedRoleId = $user->role;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'selectedRoleId' => 'required'
        ]);

        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->selectedRoleId
        ]);

        session()->flash('message', 'User updated successfully.');
        $this->resetInputFields();
        $this->users = User::all();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('message', 'User Deleted Successfully.');
        $this->users = User::all();
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'selectedRoleId' => 'required'
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->selectedRoleId,
            'password' => bcrypt('Monlau2023')
        ]);

        session()->flash('message', 'User created successfully.');
        $this->resetInputFields();
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-management');
    }
}
