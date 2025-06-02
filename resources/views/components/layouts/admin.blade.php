<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Title</title>

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
    <body class="bg-gray-900 text-[#1b1b18] font-sans antialiased" x-data x-on:click="$dispatch('search:clear-results')">
        <div class="bg-gray-800 text-black/50 ">
            <div class="relative flex flex-col items-center justify-center selection:bg-[#ff2d20] selection:text-white">
                <div class="relative w-full max-w-2xl lg:max-w-7xl">
                    <nav class="bg-gray-800">
                        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                            <div class="w-full block" id="navbar-default">
                                <ul class="font-meudium flex flex-col p-4 md:pd-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                                    <li>
                                        <a href="/" class="block py-2 px-3 text-blue-500">Home</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard" class="block py-2 px-3 text-blue-500">Admin Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/articles" class="block py-2 px-3 text-blue-500">Articles</a>
                                    </li>
                                </ul>
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
