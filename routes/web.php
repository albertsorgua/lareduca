<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', function () {
    $roleAdmin = Role::create(['name' => 'admin']);
    $roleTeacher = Role::create(['name' => 'teacher']);
    $roleStudent = Role::create(['name' => 'student']);
    return 'Roles creados';
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
