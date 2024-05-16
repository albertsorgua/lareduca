<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\User;


class CourseManagement extends Component
{
    public $courses, $title, $description, $course_id, $teacher_id;
    public $isModalOpen = false;
    public function render()
    {
        $this->courses = Course::all();
        $teachers = User::where('role', 'teacher')->get();
        return view('livewire.course-management', compact('teachers'));
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm()
    {
        $this->title = '';
        $this->description = '';
        $this->course_id = '';
        $this->teacher_id = '';
    }
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'teacher_id' => 'required',
        ]);
        Course::updateOrCreate(['id' => $this->course_id], [
            'title' => $this->title,
            'description' => $this->description,
            'teacher_id' => $this->teacher_id,
        ]);
        session()->flash('message', $this->course_id ? 'Course updated.'
            : 'Course created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $this->course_id = $id;
        $this->title = $course->title;
        $this->description = $course->description;
        $this->openModalPopover();
    }
    public function delete($id)
    {
        Course::find($id)->delete();
        session()->flash('message', 'Course deleted.');
    }
}
