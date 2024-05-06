<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lareduca ASG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        @import url('https://fonts.googleapis.com/css2?family=Macondo&display=swap');

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

        .font-macondo {
            font-family: "Macondo", cursive;
            color: black;

        }

        body {
            margin: 0;
            line-height: inherit;
            background-color: #ECB3B3;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            width: 100%;
            padding: 0 2rem;
        }
    </style>
</head>

<body class="font-macondo">
    <div>
        <div class="relative h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white w">
            <header class="flex items-center bg-white w-full">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="flex items-center h-40">
                @if (Route::has('login'))
                    <nav>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="flex items-center rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="flex items-center rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Log In
                            </a>

                            <!-- @if (Route::has('register'))
    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                                                        Register
                                                                    </a> -->
                    @endif
                @endauth
                </nav>
                @endif
            </header>

            <main class="mb-10">
                <h1 class="page-title text-center">Bienvenido al portal de aprendizaje Lareduca ASG</h1>
                <div>
                    <div class="flex">
                        <p class="flex mx-40 w-1/3 text-center items-center">Nuestra dedicación y esfuerzos dedicados a este proyecto para
                            que vuestros alumnos tengan una forma divertida y entretenida
                            de aprender los temas más tediosos.</p>
                        <img src="{{ asset('img/pexels-energepiccom-313690.jpg') }}" alt="Welcome Image 1" class="flex m-auto w-1/3 h-60">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('img/pexels-andrea-piacquadio-927022.jpg') }}" alt="Welcome Image 2" class=" flex m-auto w-1/3 h-72">
                        <p class="flex mx-40 w-1/3 text-center items-center">Detrás de este proyecto hay un gran equipo con muchos años
                            de experiencia el cual está enteramente dedicado a este proyecto
                            con el fin de que se ofrezca una experiencia de calidad, la cual
                            brinde un gran aprendizaje a nuestros usuarios.</p>
                    </div>
                </div>
            </main>

            <footer class="bg-white w-full h-28 flex items-center justify-center text-sm text-black relative bottom-0">
                LAREDUCA - Hecho por Albert Soriano
            </footer>
        </div>
    </div>
</body>


</html>
