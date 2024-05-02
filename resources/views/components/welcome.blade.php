
<!-- Contenedor principal -->
<div class="flex items-center justify-center min-h-screen py-12 bg-gray-100 px-4 sm:px-6 lg:px-8">

    <div class="absolute top-0 right-0 p-4">
        <span class="text-gray-600">¡Hola, {{ auth()->user()->name }}!</span>
        <span class="text-gray-600">({{ auth()->user()->role }})</span>
    </div>

    <!-- Contenido -->
    <div class="max-w-4xl w-full bg-white rounded-lg shadow-xl overflow-hidden" >

        <!-- Encabezado -->
        <div class="bg-gray-800 py-6 px-8 text-white">
            <h1 class="text-4xl font-extrabold leading-tight">¡Bienvenido al Portal de Aprendizaje!</h1>
            <p class="mt-2 text-lg">Accede a recursos educativos innovadores para potenciar tu enseñanza.</p>
        </div>

        <!-- Información de la escuela -->
        <div class="p-8">
            <h2 class="text-2xl font-semibold mb-4">Sobre nuestra escuela</h2>
            <p class="text-gray-700 leading-relaxed mb-4">Somos una institución dedicada a ofrecer una educación de calidad que promueva la excelencia académica y el desarrollo integral de nuestros estudiantes.</p>
            <a href="#" class="text-blue-600 font-semibold hover:underline">Conoce más sobre nosotros →</a>
        </div>

        <!-- Gráfico de asistencia de alumnos, solo lo podra ver el admin-->
        @if (auth()->user()->role === 'admin')
        <div class="bg-gray-200 px-8 py-6">
            <h2 class="text-2xl font-semibold mb-4">Asistencia de Alumnos</h2>
            <!-- <img src="https://via.placeholder.com/1200x600" alt="Gráfico de asistencia" class="w-full rounded-lg shadow-lg mb-4"> -->
            <img src="https://www.alexiaeducaria.com/wp-content/uploads/video-alexia-portada-vimeo.png" alt="Imagen1" class="w-full rounded-lg shadow-lg mb-4">
            <p class="text-gray-700 leading-relaxed">Visualiza la asistencia de los alumnos en tiempo real y analiza tendencias importantes para mejorar la participación y el rendimiento académico.</p>
            <a href="#" class="text-blue-600 font-semibold hover:underline">Ver detalles de la asistencia →</a>
        </div>
        @endif


        <!-- Últimos cursos -->
        <div class="p-8">
            <h2 class="text-2xl font-semibold mb-4">Últimos cursos disponibles</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Curso 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Introducción a la Programación</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Aprende los conceptos básicos de la programación y desarrolla habilidades fundamentales en el mundo digital.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Más información →</a>
                </div>
                <!-- Curso 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Diseño de Interfaces de Usuario</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Descubre cómo diseñar interfaces de usuario efectivas y atractivas para mejorar la experiencia de los usuarios.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Más información →</a>
                </div>
                <!-- Curso 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Inteligencia Artificial Aplicada</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Explora las aplicaciones prácticas de la inteligencia artificial en diversas industrias y sectores.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Más información →</a>
                </div>
            </div>
        </div>

        <!-- Llamado a la acción -->
        <div class="bg-gray-800 py-6 px-8 text-white">
            <h2 class="text-2xl font-semibold mb-2">¡Únete a nuestra comunidad educativa hoy mismo!</h2>
            <p class="text-lg">Descubre nuevas oportunidades de aprendizaje y desarrollo profesional.</p>
            <a href="#" class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg">Regístrate ahora</a>
        </div>

    </div>
</div>