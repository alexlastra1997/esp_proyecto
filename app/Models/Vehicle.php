<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'marca',
        'placa',
        'color',
        'fecha',
        'hora',
        'tipo', // Nuevo campo agregado
    ];
}
