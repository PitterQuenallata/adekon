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
        //
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id_marca'); 
            $table->string('nombre_marca', 100); 
            $table->text('fecha_actualizacion')->nullable(); 
            $table->text('fecha_creacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('marcas');
    }
};
