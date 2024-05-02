<div>
 @if($isTeacher)

    <!-- Opciones para profesores -->
    <div class="flex flex-col w-64 h-screen bg-gray-800">
        <div class="flex items
        -center justify-center h-14 bg-gray-900">
            <h1 class="text-white
            text-2xl">Menu</h1>
        </div>
        <div class="flex flex-col items-start

        justify-start w-full h-full p-4">
            <a href="{{ route('teacher.dashboard') }}"
            class="w-full py-2 text-white">Dashboard</a>
            <a href="{{ route('teacher.courses') }}"
            class="w-full py-2 text-white">Mis cursos</a>
            <a href="{{ route('teacher.students') }}"
            class="w-full py-2 text-white">Mis estudiantes</a>
            <a href="{{ route('teacher.profile') }}"
            class="w-full py-2 text-white">Perfil</a>
        </div>
    </div>
 @elseif($isAdmin)
 <!-- Opciones para administradores -->
    <div class="flex flex-col w-64 h-screen bg-gray-800">
        <div class="flex items
        -center justify-center h-14 bg-gray-900">
            <h1 class="text-white
            text-2xl">Menu</h1>
        </div>
        <div class="flex flex-col items-start

        justify-start w-full h-full p-4">
            <a href="{{ route('admin.dashboard') }}"
            class="w-full py-2 text-white">Dashboard</a>
            <a href="{{ route('admin.courses') }}"
            class="w-full py-2 text-white">Cursos</a>
            <a href="{{ route('admin.students') }}"
            class="w-full py-2 text-white">Estudiantes</a>
            <a href="{{ route('admin.teachers') }}"
            class="w-full py-2 text-white">Profesores</a>
            <a href="{{ route('admin.profile') }}"
            class="w-full py-2 text-white">Perfil</a>
        </div>
    </div>
 @endif
</div>