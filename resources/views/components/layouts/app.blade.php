<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                        </style>
        @endif
    </head>
    @livewireScripts
    <body class="bg-gray-900 text-[#1b1b18] font-sans antialiased" x-data x-on:click="$dispatch('search:clear-results')">
        <div class="bg-gray-800 text-black/50 ">
            <div class="relative flex flex-col items-center justify-center selection:bg-[#ff2d20] selection:text-white">
                <div class="relative w-full max-w-2xl lg:max-w-7xl">
                    <nav class=" bg-gray-800">
                        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                            <!-- Linkerkant: logo + navigatie -->
                            <div class="flex items-center space-x-6">
                                <ul class="font-medium flex space-x-6">
                                    <li>
                                        <a href="/" class="text-blue-500">Home</a>
                                    </li>

                                    @auth
                                        <li>
                                            @auth
                                                @if(auth()->user()->is_admin)
                                                    <a href="/dashboard" class="text-red-500 px-3">Admin Dashboard</a>
                                                @endif
                                            @endauth
                                        </li>

                                        @if (Auth::user()->is_admin)
                                            <li>
                                                <a href="/admin" class="text-blue-500">Admin Dashboard</a>
                                            </li>
                                        @endif
                                    @endauth
                                </ul>
                            </div>

                            <!-- Rechterkant: zoekfunctie + auth-links -->
                            <div class="flex items-center space-x-6">
                                <livewire:search placeholder="Type something to search" />

                                @auth
                                    <livewire:logout-button />
                                    <a href="{{ route('account.dashboard') }}" class="text-blue-500">Mijn Account</a>
                                @endauth

                                @guest
                                    <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                                    <a href="{{ route('register') }}" class="text-blue-500">Register</a>
                                @endguest
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">

        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="mt-6">
                {{$slot}}
            </main>
        </div>
        <script>
            document.addEventListener('search:clear-results', function(e){
                console.log('cleared results')
            });
        </script>
    </body>
</html>
