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
        Schema::table('clues', function (Blueprint $table) {
            $table->dropColumn('munipio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clues', function (Blueprint $table) {
            $table->string('munipio'); // Vuelve a agregar el campo munipio en caso de rollback
        });
    }
};
