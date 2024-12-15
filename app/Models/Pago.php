<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'fecha',
        'viaje_id'
    ];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}