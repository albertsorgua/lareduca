@extends('layouts.app')

@section('content')
    <div class="mx-auto p-6 bg-color mt-6">
        <div class="bg-white p-6 bg-white rounded shadow">
            <h1 class="text-2xl font-bold mb-4">{{ $course->title }}</h1>
            <p>{{ $course->description }}</p>
            <p>Profesor: {{ $course->teacher->name }}</p>
        </div>
        <div class="mt-5 bg-white p-5">
            <h2 class="text-xl font-semibold mt-6 mb-3">Asignaciones</h2>
            @livewire('assignments-management', ['course_id' => $course->id])
        </div>
    </div>
@endsection
