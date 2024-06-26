<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Assignment;

class AssignmentsManagement extends Component
{
    public $assignments, $title, $description, $due_date, $course_id, $assignment_id;
    public $isOpen = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'due_date' => 'required|date',
    ];

    public function mount($course_id)
    {
        $this->course_id = $course_id;
        $this->loadAssignments();
    }

    public function loadAssignments()
    {
        $this->assignments = Assignment::where('course_id', $this->course_id)->get();
    }

    public function render()
    {
        return view('livewire.assignments-management');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->due_date = '';
        $this->assignment_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required|date',
        ]);
        Assignment::updateOrCreate(['id' => $this->assignment_id], [
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'course_id' => $this->course_id,
        ]);
        session()->flash('message', $this->assignment_id ? 'Assignment Updated Successfully.' : 'Assignment Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
        $this->loadAssignments();
    }

    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $this->assignment_id = $id;
        $this->title = $assignment->title;
        $this->description = $assignment->description;
        $this->due_date = $assignment->due_date;
        $this->openModal();
    }

    public function delete($id)
    {
        Assignment::find($id)->delete();
        session()->flash('message', 'Assignment Deleted Successfully.');
        $this->loadAssignments();
    }
}
