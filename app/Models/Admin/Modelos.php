<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
  
    protected $table = 'modelos';
    protected $primaryKey = 'id_modelo';

    protected $fillable = [
        'nombre_modelo',
    ];
    // Definir columnas personalizadas para timestamps
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';

    // Si deseas mantener el manejo automático de timestamps
    public $timestamps = true;
}
