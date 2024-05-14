    <style>
        .bg-color{
            margin: 0;
            line-height: inherit;
            background-color: #ECB3B3;
        }

        .page-title {
            font-family: "Macondo", cursive;
            font-weight: 400;
            font-style: normal;
            color: #C9214A;
            font-size: 3.7rem;
            -webkit-text-stroke-width: 1.5px;
            -webkit-text-stroke-color: black;
            text-shadow: 2px 2px 0 grey, 4px 4px 0 grey;
        }
    </style>

    <!-- Encabezado -->
    <div class="bg-gray-800 py-6 px-8 text-white">
        <h1 class="text-4xl font-extrabold leading-tight">¡Hola {{ auth()->user()->name }}!</h1>
        <p class="mt-2 text-lg">Tu rol es el de {{ auth()->user()->role }}!</p>
    </div>

    <main class="mb-10">
        <h1 class="page-title text-center">Bienvenido al portal de aprendizaje Lareduca ASG</h1>
        <div>
            <div class="flex">
                <p class="flex mx-40 w-1/3 text-center items-center">Nuestra dedicación y esfuerzos dedicados a este proyecto
                    para
                    que vuestros alumnos tengan una forma divertida y entretenida
                    de aprender los temas más tediosos.</p>
                <img src="{{ asset('img/pexels-energepiccom-313690.jpg') }}" alt="Welcome Image 1"
                    class="flex m-auto w-1/3 h-60">
            </div>
            <div class="flex">
                <img src="{{ asset('img/pexels-andrea-piacquadio-927022.jpg') }}" alt="Welcome Image 2"
                    class=" flex m-auto w-1/3 h-72">
                <p class="flex mx-40 w-1/3 text-center items-center">Detrás de este proyecto hay un gran equipo con muchos
                    años
                    de experiencia el cual está enteramente dedicado a este proyecto
                    con el fin de que se ofrezca una experiencia de calidad, la cual
                    brinde un gran aprendizaje a nuestros usuarios.</p>
            </div>
        </div>
    </main>

    @if (auth()->user()->role === 'admin')
    <div class="bg-gray-100 border text-center pb-10">
        <h2 class="mt-10 text-2xl font-bold">Panel de administración</h2>
        <p class=" my-5 text-lg">Aquí podrás gestionar los cursos y usuarios de la plataforma.</p>
        <a href="{{ route('courses.manage') }}" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ir al panel de administración</a>
    </div>        
    @endif