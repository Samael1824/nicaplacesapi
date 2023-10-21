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
        Schema::create("rols", function (Blueprint $table) {
            
                $table->id();
                $table->string('nombre', 80);
                $table->string('descripcion', 250);
                $table->integer('estado')->default(1);
                $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('rols');
    }
};
