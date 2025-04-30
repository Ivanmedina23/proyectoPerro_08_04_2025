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
        Schema::create('autos', function (Blueprint $table) {
            $table->id('id');
            $table->string('modelo',25);
            $table->string('marca',25);
            $table->char('matricula', 11);
            $table->string('transmision',25);
            $table->string('gasolina',25);
            $table->string('estado');
            $table->float('Costo_dia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
