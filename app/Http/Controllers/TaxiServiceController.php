<?php

namespace App\Http\Controllers;

use App\Models\TaxiService;
use Illuminate\Http\Request;


class TaxiServiceController extends Controller
{
    public function index()
    {
        $services = TaxiServiceController::class;
        return view('registrarservicioprogramado', compact('services'));
    }

    public function create()
    {
        return view('registrarservicioprogramado');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required',
            'pickup_time' => 'required|date',
        ]);

        TaxiServiceController::create($request->all());

        return redirect()->route('RegistrarServicioProgramado') ->with('success', 'Servicio programado correctamente.');
    }
}
