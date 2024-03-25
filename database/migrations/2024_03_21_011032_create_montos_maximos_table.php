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
        Schema::create('montos_maximos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficio_id')->constrained();
            $table->integer('monto_minimo');
            $table->integer('monto_maximo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montos_maximos');
    }
};
