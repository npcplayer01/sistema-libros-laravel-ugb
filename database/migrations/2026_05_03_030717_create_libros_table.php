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
    Schema::create('libros', function (Blueprint $table) {
        $table->id();
        $table->string('titulo'); // Columna para el título
        $table->string('autor');  // Columna para el autor
        $table->integer('anio');  // Columna para el año 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
