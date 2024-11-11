<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function mostrarInterfaz()
    {
        return view('post/VentanaPrincipal');
    }
}

