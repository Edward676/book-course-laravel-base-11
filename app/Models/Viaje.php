<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'origen',
        'destino',
        'fecha',
        'precio',
        'conductor_id',
        'taxi_id'
    ];

    public function conductor()
    {
        return $this->belongsTo(Conductor::class);
    }

    public function taxi()
    {
        return $this->belongsTo(Taxi::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
