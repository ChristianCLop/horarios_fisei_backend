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
        Schema::table('horarios', function (Blueprint $table) {
            // Modificar las columnas de las claves foráneas para permitir valores nulos
            $table->unsignedBigInteger('paralelo_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horarios', function (Blueprint $table) {
            // Modificar las columnas de las claves foráneas para permitir valores nulos
            $table->unsignedBigInteger('paralelo_id')->nullable(false)->change();
        });
    }
};
