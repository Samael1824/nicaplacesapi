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
        Schema::create("ofertas", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_negocio');
            $table->text('descripcion')->nullable();
            $table->integer('precio')->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->datetime('fecha_final')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();

            $table->foreign('id_negocio')->references('id')->on('negocios');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('oferta');
    }
};
