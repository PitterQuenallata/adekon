<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'nombre_categoria',
    ];
    // Definir columnas personalizadas para timestamps
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';

    // Si deseas mantener el manejo automático de timestamps
    public $timestamps = true;
}
