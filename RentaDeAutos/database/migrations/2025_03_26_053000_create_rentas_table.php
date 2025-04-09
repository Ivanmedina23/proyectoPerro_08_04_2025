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
        Schema::create('renta', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('IdAuto')->references('id')->on('Autos');
            $table->foreignId('IdUsuario')->references('id')->on('Usuario');
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaFinal');
            // Cambiar EstadoRenta de boolean a enum con los valores 'Disponible' y 'No disponible'
            $table->enum('EstadoRenta', ['Disponible', 'No disponible'])->default('Disponible');
            $table->decimal('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Volver a eliminar la tabla 'renta'
        Schema::dropIfExists('renta');
    }
};
