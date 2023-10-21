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
        Schema::create("usuarios", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_persona');
            $table->string('codigo', 10)->unique();
            $table->string('usuario', 40);
            $table->timestamp('fecha_registro');
            $table->integer('estado')->default(1);
            $table->timestamps();

            $table->foreign('id_rol')->references('id')->on('rols');
            $table->foreign('id_persona')->references('id')->on('personas');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('usuarios');
    }
};
