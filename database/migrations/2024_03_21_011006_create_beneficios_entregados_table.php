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
        Schema::create('beneficios_entregados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficio_id')->constrained();
            $table->integer('run');
            $table->integer('dv');
            $table->integer('total');
            $table->integer('estado');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficios_entregados');
    }
};
