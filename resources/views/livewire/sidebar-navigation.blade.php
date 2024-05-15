<div>
    
    @if ($isTeacher)
        <!-- Opciones para profesores -->
        <div class="flex items-center justify-center mx-auto py-5 bg-gray-900">
            <h1 class="text-white text-2xl">Menu</h1>
        </div>
        <div class="flex flex-col w-64 h-full bg-gray-800">
            <div class="flex flex-col items-start justify-start w-full h-full p-4">
                <a href="{{ route('dashboard') }}" class="w-full py-2 text-white">Dashboard</a>
                <a href="{{ route('courses.manage') }}" class="w-full py-2 text-white">Mis cursos</a>
            </div>
        </div>
    @elseif($isAdmin)
        <!-- Opciones para administradores -->
        <div class="flex items-center justify-center mx-auto py-5 bg-gray-900">
            <h1 class="text-white text-2xl">Menu</h1>
        </div>
        <div class="flex flex-col w-64 h-full bg-gray-800">
            <div class="flex flex-col items-start justify-start w-full h-full p-4">
                <a href="{{ route('dashboard') }}" class="w-full py-2 text-white">Dashboard</a>
                <a href="{{ route('courses.manage') }}" class="w-full py-2 text-white">Cursos</a>
                <a href="{{ route('users.manage') }}" class="w-full py-2 text-white">Usuarios</a>
            </div>
        </div>
    @endif
</div>
