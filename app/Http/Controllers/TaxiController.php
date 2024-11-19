<?php

namespace App\Http\Controllers;

use App\Models\Taxi;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TaxiController extends Controller
{
    public function index()
    { 
        $taxis = Taxi::all();
        return view('post/UnidadesRegistradas', compact('taxis'));
        return view('Post.ReporteServiciosUnidad');
    }
}