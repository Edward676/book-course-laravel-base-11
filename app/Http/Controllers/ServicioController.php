<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function create()
    {
        return view('post/RegistrarNuevoServicio');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'precio' => 'required|numeric',
        ]);

        ServicioController::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);

        return redirect()->route('RegistrarNuevoServicio')->with('success', 'Servicio registrado con éxito');
    }

    public function buscar(Request $request)
    {
        // Lógica para buscar servicios
        $numero = $request->input('numero');
        return view('servicio.resultados', compact('numero'));
    }

    public function seleccionar(Request $request)
    {
        // Lógica para seleccionar una dirección
        $direccion = $request->input('direccion');
        return back()->with('success', "Dirección seleccionada: $direccion");
    }

    public function crear()
    {
        // Mostrar formulario para crear nueva dirección
        return view('servicio.crear');
    }

    public function editar($id)
    {
        // Lógica para editar una dirección específica
        return view('servicio.editar', ['id' => $id]);
    }

    public function asignar(Request $request)
    {
        // Lógica para asignar el servicio
        return back()->with('success', 'Servicio asignado correctamente');
    }
}
