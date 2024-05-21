<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['title', 'description', 'course_id', 'due_date'];

    public function course()
    {
    return $this->belongsTo(Course::class, 'course_id');
    }
    
    // Si permites envíos de asignaciones
    public function submissions()
    {
    return $this->hasMany(AssignmentSubmission::class);
    }
}