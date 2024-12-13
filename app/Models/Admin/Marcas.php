<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'id_marca';

    protected $fillable = [
        'nombre_marca',
    ];
    // Definir columnas personalizadas para timestamps
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';

    // Si deseas mantener el manejo automático de timestamps
    public $timestamps = true;
}
