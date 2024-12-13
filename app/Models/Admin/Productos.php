<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    // Nombre de la tabla asociada
    protected $table = 'productos';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_producto';

    // Columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'nombre_producto',
        'id_marca',
        'id_categoria',
        'id_modelo',
        'id_diseno',
        'descripcion_producto',
        'img_producto',
        'stock_producto',
        'precio_producto',
        'dimensiones_producto',
        'venta_producto',
        'estado_producto',
    ];

    // Definir columnas personalizadas para timestamps
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';

    // Permitir manejo automático de timestamps
    public $timestamps = true;
}

