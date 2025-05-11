<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a la aplicación de Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto text-center py-12">
        <h1 class="text-4xl font-bold">Bienvenido a la aplicación de gestión de citas</h1>
        <p class="mt-4 text-lg">Por favor, inicia sesión o regístrate para comenzar.</p>
        <div class="mt-8">
            <a href="{{ route('login') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="bg-green-500 text-white py-2 px-4 rounded">Registrarse</a>
        </div>
    </div>
</body>
</html>
