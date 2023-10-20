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
        Schema::create("clientes", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_persona");
            $table->string('facebook', 150);
            $table->string('instagram', 150)->unique();
            $table->string('twitter', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
