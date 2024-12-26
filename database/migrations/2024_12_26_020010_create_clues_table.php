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
        Schema::create('clues', function (Blueprint $table) {
            $table->id(); // Campo ID automático
            $table->string('clues'); // Campo clues
            $table->string('unidad'); // Campo unidad
            $table->string('municipio'); // Campo municipio
            $table->string('jurisdiccion'); // Campo jurisdicción
            $table->integer('jurisdiccion_id'); // Campo jurisdicción_id
            $table->string('munipio'); // Campo munipio
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clues');
    }
};
