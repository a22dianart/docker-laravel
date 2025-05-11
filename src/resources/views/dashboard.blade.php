@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Título de bienvenida -->
        <h1 class="text-4xl font-bold text-center text-gray-800">Bienvenido al Dashboard</h1>

        <!-- Descripción -->
        <p class="mt-4 text-lg text-gray-600 text-center">Desde aquí podrás gestionar tus citas.</p>

        <!-- Botones para las citas -->
        <div class="mt-8 flex justify-center gap-6">
            <a href="{{ route('citas.index') }}" 
               class="bg-blue-600 text-blue py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
               Ver Citas
            </a>

            <a href="{{ route('citas.create') }}" 
               class="bg-green-600 text-blue py-3 px-6 rounded-lg shadow-md hover:bg-green-700 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
               Crear Nueva Cita
            </a>
        </div>
    </div>
@endsection
