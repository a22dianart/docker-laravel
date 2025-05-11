<?php
namespace App\Http\Controllers\Taller;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('taller.citas.index', compact('citas'));
    }

    public function pendientes()
    {
        $citas = Cita::whereNull('fecha')->orWhereNull('hora')->get();
        return view('taller.citas.pendientes', compact('citas'));
    }

    public function edit(Cita $cita)
    {
        return view('taller.citas.edit', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'fecha' => 'required|date', 'hora' => 'required',
            'duracion_estimada' => 'required|integer'
        ]);

        $cita->update($request->all());
        return redirect()->route('taller.citas.index')->with('success', 'Cita actualizada.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->back()->with('success', 'Cita eliminada.');
    }

    public function show(Cita $cita)
    {
        return view('taller.citas.show', compact('cita'));
    }
}
