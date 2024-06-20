<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $primaryKey = 'patente';
    public $incrementing = false; // Indicamos que la clave primaria no es autoincremental
    protected $keyType = 'string'; // Indicamos que la clave primaria es de tipo string

    protected $fillable = [
        'patente',
        'anio',
        'tipo_vehiculo',
        'disponibilidad',
        'modelo',
        'imagen'
    ];
}
