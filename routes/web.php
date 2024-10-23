<?php

//use App\Http\Controllers\PrimerControlador;

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);

//Route::get('test',[PrimerControlador::class,'index']);

//Route::get('otro/{post?}/{otro?}',[PrimerControlador::class, 'otro']);

//Route::get('/test',function(){
//    return "Central de Taxi Grito";
//});

//Route::get('/test',function(){
    
    //return redirect('/crud', 303);
    //return redirect()->route('crud');
    //return to_route('crud');
    //return view('test', ['name' => 'Oliver']);
//});

//Route::get('/crud',function(){
//    return view('crud/index');
//});

//Route::get('/crud',function(){

    //$num = 78;
    //$data = ['name' => 'Operador de la Unidad 78: Oliver Eduardo Guerra Espinoza', 'num' => $num];

    //return view('crud/index',$data);
//})->name ('crud');
