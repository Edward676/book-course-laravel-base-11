<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'unidads'; // Cambiar según tu base de datos

    // Campos asignables masivamente
    protected $fillable = [
        'idUnidad',
        'numEconomico',
        'idMunicipio',
        'claveOperador',
        'claveDuenio',
    ];
}
