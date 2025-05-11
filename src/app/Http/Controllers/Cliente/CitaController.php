<?php

// app/Http/Controllers/Cliente/CitaController.php
namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    public function index()
    {
        // Obtener todas las citas del cliente autenticado
        $citas = Auth::user()->citas;
        return view('citas.index', compact('citas'));  // Vistas en la carpeta citas
    }

    public function create()
    {
        return view('citas.create');  // Vistas en la carpeta citas
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'matricula' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'duracion_estimada' => 'required|integer',
        ]);

        // Crear la cita
        $cita = new Cita($request->all());
        $cita->cliente_id = Auth::id();  // Asociar la cita con el cliente autenticado
        $cita->save();

        return redirect()->route('citas.index')->with('success', 'Cita creada correctamente.');
    }

    public function show(Cita $cita)
    {
        // Verificar si el cliente autenticado es el dueño de la cita
        $this->authorize('view', $cita);
        return view('citas.show', compact('cita'));  // Vistas en la carpeta citas
    }
}
