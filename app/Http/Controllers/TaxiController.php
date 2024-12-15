<?php

namespace App\Http\Controllers;

use App\Models\Taxi;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TaxiController extends Controller
{
    // Método para mostrar las unidades registradas
    public function index()
    {
        $taxis = Taxi::all();
        return view('post/UnidadesRegistradas', compact('taxis'));
    }

    // Método para mostrar el reporte general
    public function consultar()
    {
        return view('Post/ReporteGeneral/ReporteServicioUnidad/ReporteUnidad');
    }

    // Método para mostrar el reporte general
    public function imprimir()
    {
        return view('Post/ReporteGeneral/ReporteServicioUnidad/ReporteUnidad');
    }

    // Método para mostrar el reporte general
    public function guardar()
    {
        return view('Post/ReporteGeneral/ReporteServicioUnidad/ReporteUnidad');
    }

    
    
}