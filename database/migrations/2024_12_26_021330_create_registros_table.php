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
        Schema::create('registros', function (Blueprint $table) {
            $table->id(); 
            $table->string('folio'); 
            $table->string('unidad'); 
            $table->string('clues'); 
            $table->string('jurisdiccion'); 
            $table->integer('jurisdiccion_id'); 
            $table->string('municipio'); 
            $table->string('propietario'); 
            $table->string('especie'); 
            $table->string('sexo'); 
            $table->string('edad'); 
            $table->string('nombre_mascota'); 
            $table->string('dosis'); 
            $table->string('vacunador_id'); 
            $table->string('vacunador_nombre'); 
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
