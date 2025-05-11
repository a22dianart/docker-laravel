<!-- resources/views/citas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-gray-800">Mis Citas</h1>

        <div class="mt-8">
            @foreach ($citas as $cita)
                <div class="border-b py-4">
                    <h2 class="text-xl font-semibold">{{ $cita->marca }} {{ $cita->modelo }}</h2>
                    <p class="text-gray-600">Matrícula: {{ $cita->matricula }}</p>
                    <p class="text-gray-600">Fecha: {{ $cita->fecha }} a las {{ $cita->hora }}</p>
                    <p class="text-gray-600">Duración Estimada: {{ $cita->duracion_estimada }} minutos</p>
                    <a href="{{ route('citas.show', $cita->id) }}" class="text-blue-500">Ver detalles</a>
                </div>
            @endforeach
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('citas.create') }}" class="bg-green-600 text-blue py-3 px-6 rounded-lg shadow-md hover:bg-green-700 transition-colors duration-300">
                Crear Nueva Cita
            </a>
        </div>
    </div>
@endsection
