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
        Schema::create('lugaresturisticos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_departamento');
            $table->unsignedBigInteger('id_medtransporte');
            $table->unsignedBigInteger('id_expadicionales');
            $table->string('nombre');
            $table->string('descripcion');
            $table->point('ubicacion')->nullable();
            $table->string('accesibilidad');
            $table->string('horario');
            $table->string('tipoexperiencia');
            $table->string('categoria');
        
            $table->foreign('id_departamento')->references('id')->on('departamento');
            $table->foreign('id_medtransporte')->references('id')->on('mediostransporte');
            $table->foreign('id_expadicionales')->references('id')->on('experienciasadicionales');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugaresturisticos');
    }
};
