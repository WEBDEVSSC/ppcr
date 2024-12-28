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
        Schema::table('parametros', function (Blueprint $table) {
            //
            $table->integer('meta_j1')->nullable();
            $table->integer('meta_j2')->nullable();
            $table->integer('meta_j3')->nullable();
            $table->integer('meta_j4')->nullable();
            $table->integer('meta_j5')->nullable();
            $table->integer('meta_j6')->nullable();
            $table->integer('meta_j7')->nullable();
            $table->integer('meta_j8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parametros', function (Blueprint $table) {
            //
            $table->dropColumn(['meta_j1', 'meta_j2', 'meta_j3', 'meta_j4', 'meta_j5', 'meta_j6', 'meta_j7', 'meta_j8']);
        });
    }
};
