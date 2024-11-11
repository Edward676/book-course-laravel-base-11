<?php

namespace App\Http\Controllers;

use App\Models\Taxi;
use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function index()
    {
        $taxis = Taxi::all();
        return view('UnidadesRegistradas.indbex', compact('taxis'));
    }
}