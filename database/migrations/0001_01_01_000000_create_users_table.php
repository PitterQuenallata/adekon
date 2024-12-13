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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->nullable();
            // Campos adicionales
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('last_mader_name', 100);
            $table->string('username', 100)->unique();
            $table->string('telefono', 50);
            $table->string('foto', 255)->nullable();

            // Campos estándar Breeze
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->boolean('status')->default(true);
            $table->text('ultimo_acceso')->nullable();

            $table->rememberToken();
            $table->timestamps();

            // Clave foránea a roles (ajusta si tu PK de roles es diferente)
            $table->foreign('role_id')->references('id_rol')->on('roles')->onDelete('set null');


        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
