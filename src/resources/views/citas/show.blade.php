<!-- resources/views/citas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-gray-800">Detalles de la Cita</h1>

        <div class="mt-8">
            <p><strong>Marca:</strong> {{ $cita->marca }}</p>
            <p><strong>Modelo:</strong> {{ $cita->modelo }}</p>
            <p><strong>Matrícula:</strong> {{ $cita->matricula }}</p>
            <p><strong>Fecha:</strong> {{ $cita->fecha }} a las {{ $cita->hora }}</p>
            <p><strong>Duración Estimada:</strong> {{ $cita->duracion_estimada }} minutos</p>
        </div>
    </div>
@endsection
