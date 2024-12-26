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
        Schema::table('users', function (Blueprint $table) {
            $table->string('clues')->nullable()->after('email'); // Agregar campo clues después del campo email
            $table->string('unidad')->nullable()->after('clues'); // Agregar campo unidad después de clues
            $table->string('municipio')->nullable()->after('unidad'); // Agregar campo municipio después de unidad
            $table->string('jurisdiccion')->nullable()->after('municipio'); // Agregar campo jurisdicción después de municipio
            $table->integer('jurisdiccion_id')->nullable()->after('jurisdiccion'); // Agregar campo jurisdicción_id después de jurisdicción
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['clues', 'unidad', 'municipio', 'jurisdiccion', 'jurisdiccion_id']); // Eliminar campos agregados
        });
    }
};
