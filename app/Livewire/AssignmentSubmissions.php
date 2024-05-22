<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\AssignmentSubmission;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;

class AssignmentSubmissions extends Component
{
    use WithFileUploads;

    public $submissions, $assignmentId, $user_id, $submissionText, $submissionFile, $assignment;

    public function mount($assignmentId)
    {
        $this->assignmentId = $assignmentId;
        $this->loadSubmissions();
        $this->loadAssignment();
    }

    public function loadSubmissions()
    {
        $this->submissions = AssignmentSubmission::where('assignment_id', $this->assignmentId)->get();
    }

    public function loadAssignment()
    {
        $this->assignment = Assignment::find($this->assignmentId);
    }

    public function saveSubmission()
    {
        $this->validate([
            'submissionText' => 'nullable|string',
            'submissionFile' => 'nullable|file|max:10240', // 10MB Max
        ]);
        $submission = new AssignmentSubmission();
        $submission->assignment_id = $this->assignmentId;
        $submission->user_id = Auth::id();
        $submission->submission_text = $this->submissionText;
        if ($this->submissionFile) {
            $filePath = $this->submissionFile->store(
                'submissions',
                'public'
            );
            $submission->submission_file = $filePath;
        }
        $submission->save();
        $this->reset(['submissionText', 'submissionFile']);
        $this->loadSubmissions();
    }

    public function render()
    {
        return view('livewire.assignment-submissions');
    }
}