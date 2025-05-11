<!-- resources/views/citas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold">Editar Cita</h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('citas.update', $cita->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mt-4">
                <label for="fecha" class="block">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="border px-4 py-2 mt-2 w-full" value="{{ old('fecha', $cita->fecha) }}">
            </div>
            <div class="mt-4">
                <label for="hora" class="block">Hora</label>
                <input type="time" name="hora" id="hora" class="border px-4 py-2 mt-2 w-full" value="{{ old('hora', $cita->hora) }}">
            </div>
            <div class="mt-4">
                <label for="duracion_estimada" class="block">Duración Estimada</label>
                <input type="number" name="duracion_estimada" id="duracion_estimada" class="border px-4 py-2 mt-2 w-full" value="{{ old('duracion_estimada', $cita->duracion_estimada) }}" step="0.5">
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-green-500 text-blue py-2 px-4 rounded">Actualizar Cita</button>
            </div>
        </form>
    </div>
@endsection
