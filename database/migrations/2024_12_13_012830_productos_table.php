<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto'); // Clave primaria auto incremental
            $table->unsignedInteger('id_marca')->nullable(); // Llave foránea a marcas
            $table->unsignedInteger('id_categoria')->nullable(); // Llave foránea a categorías
            $table->unsignedInteger('id_modelo')->nullable(); // Llave foránea a modelos
            $table->unsignedInteger('id_diseno')->nullable(); // Llave foránea a diseños

            $table->string('nombre_producto', 150); // Nombre del producto
            $table->string('descripcion_producto', 150); // Descripción corta del producto
            $table->text('img_producto')->nullable(); // Imagen del producto
            $table->integer('stock_producto')->nullable(); // Stock disponible
            $table->float('precio_producto')->nullable(); // Precio del producto
            $table->text('dimensiones_producto')->nullable(); // Dimensiones del producto
            $table->integer('venta_producto')->nullable(); // Indica si está en venta (1: Sí, 0: No)
            $table->integer('estado_producto')->nullable(); // Estado del producto (activo, inactivo)
            $table->text('fecha_creacion')->nullable(); // Fecha de creación
            $table->text('fecha_actualizacion')->nullable(); // Fecha de última actualización

            // Llaves foráneas
            $table->foreign('id_marca')->references('id_marca')->on('marcas')->onDelete('set null');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias')->onDelete('set null');
            $table->foreign('id_modelo')->references('id_modelo')->on('modelos')->onDelete('set null');
            $table->foreign('id_diseno')->references('id_diseno')->on('disenos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
