<?php

use App\Models\Taxi;
use Illuminate\Support\Facades\Route;


Route::get('/taxis', function () {
    $taxis = Taxi::all(); // Obtiene todos los taxis registrados desde la base de datos
    return view('taxis.index', compact('taxis')); // Envía la variable $taxis a la vista
});

Route::get('/', function () {
    return view('post/VentanaPrincipal');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/VentanaPrincipal', [App\Http\Controllers\MiControlador::class, 'mostrarInterfaz']);


Route::get('/RegistrarNuevoServicio', function () {
    return view('Post/RegistrarNuevoServicio');
})->name('RegistrarNuevoServicio');

Route::get('/RegistrarServicioProgramado', function () {
    return view('Post/RegistrarServicioProgramado');
})->name('RegistrarServicioProgramado');

Route::get('/RegistrarNuevaUnidad', function () {
    return view('Post/RegistrarNuevaUnidad');
})->name('RegistrarNuevaUnidad');

Route::get('/UnidadesRegistradas', function () {
    return view('Post/unidadesregistradas');
})->name('UnidadesRegistradas');

Route::get('/ReporteGeneral', function () {
    return view('Post/ReporteGeneral');
})->name('ReporteGeneral');

Route::get('/ReporteServiciosUnidad', function () {
    return view('Post/ReporteServiciosUnidad');
})->name('ReporteServiciosUnidad');

Route::get('/ReporteUnidad', function () {
    return view('Post/ReporteUnidad');
})->name('ReporteUnidad');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/reporte', function () {
    return view('reporte');
});

use App\Http\Controllers\ReporteUnidadController;

Route::get('/reporte-unidad', [ReporteUnidadController::class, 'index']);

// Registrar un nuevo taxi
Route::post('/taxis', function () {
    $data = request()->validate([
        'placa' => 'required',
        'modelo' => 'required',
        'color' => 'required',
        'conductor' => 'required',
    ]);

    Taxi::create($data); // Crea el nuevo taxi

    return redirect('/taxis');
})->name('taxis.store');

// registrar nuevo servicio
use App\Http\Controllers\ServicioController;

Route::get('/servicios/create', [ServicioController::class, 'create'])->name('registrarnuevoservicio');
Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');

use App\Http\Controllers\UnidadTaxiController;

Route::get('unidad-taxi/registrar', [UnidadTaxiController::class, 'create'])->name('unidad_taxi.create');
Route::post('unidad-taxi/guardar', [UnidadTaxiController::class, 'store'])->name('unidad_taxi.store');

use App\Http\Controllers\TaxiController;

Route::get('/taxis', [TaxiController::class, 'index']);
Route::get('post/UnidadesRegistradas', [TaxiController::class, 'index'])->name('unidades.index');
Route::get('yeri', [TaxiController::class, 'dd'])->name('unidades.index');
Route::get('/UnidadesRegistradas/create', [TaxiController::class, 'create'])->name('unidades.create');
Route::post('/UnidadesRegistradas2', [TaxiController::class, 'store'])->name('unidades.store');
Route::get('/consultar', [TaxiController::class, 'consultar'])->name('consultar');
Route::get('/imprimir', [TaxiController::class, 'imprimir'])->name('imprimir');
Route::post('/guardar', [TaxiController::class, 'guardar'])->name('Guardar');


use App\Http\Controllers\TaxiServiceController;

Route::get('/taxi_services', [TaxiServiceController::class, 'index'])->name('taxi_services.index');
Route::get('/taxi_services/create', [TaxiServiceController::class, 'create'])->name('taxi_services.create');
Route::post('/taxi_services', [TaxiServiceController::class, 'store'])->name('taxi_services.store');


