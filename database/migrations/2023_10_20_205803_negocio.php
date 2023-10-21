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
        Schema::create('negocios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->string('descripcion');
            $table->string('sector_comercial');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('negocios');
    }
};
