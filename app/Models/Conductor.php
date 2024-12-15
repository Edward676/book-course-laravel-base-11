<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'email'
    ];

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }
}