<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Disenos extends Model
{
    protected $table = 'disenos';
    protected $primaryKey = 'id_diseno';

    protected $fillable = [
        'nombre_diseno',
    ];
    // Definir columnas personalizadas para timestamps
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';

    // Si deseas mantener el manejo automático de timestamps
    public $timestamps = true;
}
