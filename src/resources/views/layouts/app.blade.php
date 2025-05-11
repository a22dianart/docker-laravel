<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css') <!-- Cambié el archivo CSS aquí si estás usando Vite -->
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex flex-col">

        @include('layouts.navigation')
        <main class="flex-grow p-6 bg-white shadow-md rounded-lg mx-auto my-6 max-w-7xl">

            @yield('content')

        </main>
    </div>

    @vite('resources/js/app.js')

</body>

</html>
