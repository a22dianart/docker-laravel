<!-- resources/views/citas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-gray-800">Crear Nueva Cita</h1>

        <form method="POST" action="{{ route('citas.store') }}" class="mt-8">
            @csrf
            <div class="mb-4">
                <label for="marca" class="block text-gray-700">Marca</label>
                <input type="text" name="marca" id="marca" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="modelo" class="block text-gray-700">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="matricula" class="block text-gray-700">Matrícula</label>
                <input type="text" name="matricula" id="matricula" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700">Fecha de la cita</label>
                <input type="date" name="fecha" id="fecha" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="hora" class="block text-gray-700">Hora de la cita</label>
                <input type="time" name="hora" id="hora" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="duracion_estimada" class="block text-gray-700">Duración Estimada (minutos)</label>
                <input type="number" name="duracion_estimada" id="duracion_estimada" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <button type="submit" class="bg-green-600 text-blue py-3 px-6 rounded-lg shadow-md hover:bg-green-700 transition-colors duration-300">
                Crear Cita
            </button>
        </form>
    </div>
@endsection
