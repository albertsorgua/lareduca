<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para crear roles
Route::get('/roles', function () {
    $roleAdmin = Role::create(['name' => 'admin']);
    $roleTeacher = Role::create(['name' => 'teacher']);
    $roleStudent = Role::create(['name' => 'student']);
    return 'Roles creados';
});

// Rutas para autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Ruta para gestionar usuarios
Route::get(
    '/users',
    \App\Livewire\UserManagement::class
)->name('users.manage')->middleware('auth');

// Ruta para gestionar cursos
Route::get(
    '/courses',
    \App\Livewire\CourseManagement::class
)->name('courses.manage')->middleware('auth');

// Ruta para gestionar asignaciones
Route::get('/courses/{course}', function (App\Models\Course $course) {
    return view('livewire.course-details', ['course' => $course]);
})->name('courses.show');

// Ruta para gestionar entregas
Route::get('/courses/{course}/{assignmentId}', \App\Livewire\AssignmentSubmissions::class)->name('assignments.show')->middleware('auth');