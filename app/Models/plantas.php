<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plantas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'nombre_cientifico', 'caracteristicas', 'descripcion', 'datos_claves', 'id_categoria', 'img'
    ];
}
