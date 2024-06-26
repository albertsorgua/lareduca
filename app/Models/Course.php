<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'teacher_id',
        'department_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Si tienes inscripciones a cursos
    public function enrollments()
    {
        return $this->hasMany(CourseEnrollment::class);
    }
}