<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\CourseEnrollment;
use Illuminate\Support\Facades\Auth;

class CourseEnrollments extends Component
{
    public $courses;
    public $selectedCourseId;
    public $enrollments;
    public function mount()
    {
        $this->courses = Course::all();
        $this->loadEnrollments();
    }
    public function loadEnrollments()
    {
        
    }
    public function enroll()
    {
        $this->validate([
            'selectedCourseId' => 'required',
        ]);
        CourseEnrollment::create([
            'user_id' => Auth::id(),
            'course_id' => $this->selectedCourseId,
            'enrollment_date' => now(),
            'status' => 'enrolled', // Considerar distintos estados
        ]);
        session()->flash('message', 'Successfully enrolled in the course.');
    }

    public function render()
    {
        return view('livewire.course-enrollment');
    }
}
