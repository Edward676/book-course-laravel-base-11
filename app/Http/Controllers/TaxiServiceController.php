<?php

namespace App\Http\Controllers;

use App\Models\TaxiService;
use Illuminate\Http\Request;


class TaxiServiceController extends Controller
{
    public function index()
    {
        $services = TaxiServiceController::class;
        return view('taxi_services.index', compact('services'));
    }

    public function create()
    {
        return view('taxi_services.create');
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

        return redirect()->route('taxi_services.index')
                         ->with('success', 'Servicio programado correctamente.');
    }
}
