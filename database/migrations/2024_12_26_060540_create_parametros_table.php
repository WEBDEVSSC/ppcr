<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();  // Campo id autoincremental
            $table->integer('meta_anual');  // Campo meta_anual de tipo integer
            $table->integer('anio');  // Campo meta_anual de tipo integer
            $table->timestamps();  // Campos created_at y updated_at (si es necesario)
        });
    }

    /**
     * Revierte la migración.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
};
