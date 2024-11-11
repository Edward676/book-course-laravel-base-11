<?php

namespace App\Http\Controllers;

use App\Models\Unidadesregistradas;
use App\Models\UnidadTaxi;
use Illuminate\Http\Request;

class UnidadTaxiController extends Controller
{
    public function create()
    {
        return view('unidad_taxi.create');
    }
    public function index()
    {
        $unidades = Unidadesregistradas::all(); 
        return view('unidad_taxi.index', compact('unidades')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|unique:unidad_taxis|max:10',
            'modelo' => 'required|max:50',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'capacidad' => 'required|integer|min:1|max:10',
        ]);

        UnidadTaxi::create($request->all());

        return redirect()->route('unidad_taxi.create')->with('success', 'Unidad de taxi registrada exitosamente');
    }
}
