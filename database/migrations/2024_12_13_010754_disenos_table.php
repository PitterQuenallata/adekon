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
        Schema::create('disenos', function (Blueprint $table) {
            $table->increments('id_diseno'); 
            $table->string('nombre_diseno', 100); 
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
        Schema::dropIfExists('disenos');
    }
};
