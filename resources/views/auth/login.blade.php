<header class="flex items-center justify-between bg-white w-full">
    <a href="/">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="flex items-center h-40">
    </a>
    @if (Route::has('login'))
        <nav>
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="flex items-center rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="flex items-center rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] mr-10">
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
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <h1 class="font-macondo text-center text-6xl text-black m-10">{{ __('Login') }}</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-10">
                <x-label for="email" value="{{ __('Introduzca el email de la cuenta:') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="my-4">
                <x-label for="password" value="{{ __('Introduzca la contraseña de la cuenta:') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block my-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado tu contraseña?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<footer class="bg-white w-full h-28 flex items-center justify-center text-sm text-black relative bottom-0">
    LAREDUCA - Hecho por Albert Soriano
</footer>