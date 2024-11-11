<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
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
    return view('RegistrarNuevoServicio');
})->name('RegistrarNuevoServicio');

Route::get('/RegistrarServicioProgramado', function () {
    return view('RegistrarServicioProgramado');
})->name('RegistrarServicioProgramado');

Route::get('/RegistrarNuevaUnidad', function () {
    return view('RegistrarNuevaUnidad');
})->name('RegistrarNuevaUnidad');

Route::get('/UnidadesRegistradas', function () {
    return view('UnidadesRegistradas');
})->name('UnidadesRegistradas');

Route::get('/ReporteGeneral', function () {
    return view('ReporteGeneral');
})->name('ReporteGeneral');

Route::get('/ReporteServiciosUnidad', function () {
    return view('ReporteServiciosUnidad');
})->name('ReporteServiciosUnidad');

Route::get('/ReporteUnidad', function () {
    return view('ReporteUnidad');
})->name('ReporteUnidad');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/reporte', function () {
    return view('reporte');
});

use App\Http\Controllers\ReporteUnidadController;

Route::get('/reporte-unidad', [ReporteUnidadController::class, 'index']);

use App\Http\Controllers\ServicioController;

Route::get('/servicios/create', [ServicioController::class, 'create'])->name('servicios.create');
Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');

use App\Http\Controllers\UnidadTaxiController;

Route::get('unidad-taxi/registrar', [UnidadTaxiController::class, 'create'])->name('unidad_taxi.create');
Route::post('unidad-taxi/guardar', [UnidadTaxiController::class, 'store'])->name('unidad_taxi.store');

use App\Http\Controllers\TaxiServiceController;

Route::get('/taxi_services', [TaxiServiceController::class, 'index'])->name('taxi_services.index');
Route::get('/taxi_services/create', [TaxiServiceController::class, 'create'])->name('taxi_services.create');
Route::post('/taxi_services', [TaxiServiceController::class, 'store'])->name('taxi_services.store');

use App\Http\Controllers\TaxiController;

Route::get('/taxis', [TaxiController::class, 'index']);