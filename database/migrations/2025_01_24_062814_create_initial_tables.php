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
        // Crear tabla de directores
        Schema::create('directores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->timestamps();
        });

        // Crear tabla de elenco
        Schema::create('elenco', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });

        // Crear tabla de ISRC
        Schema::create('isrc', function (Blueprint $table) {
            $table->id();
            $table->string('isrc');
            $table->string('tipo');
            $table->timestamps();
        });

        // Crear tabla de clientes
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->timestamps();
        });

        // Crear tabla de películas
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->year('anio_estreno');
            $table->unsignedBigInteger('director_id')->nullable();
            $table->unsignedBigInteger('id_isrc')->nullable();
            $table->timestamps();

            // Claves foráneas
            $table->foreign('director_id')->references('id')->on('directores')->onDelete('cascade');
            $table->foreign('id_isrc')->references('id')->on('isrc')->onDelete('cascade');
        });

        // Crear tabla pivot entre elenco y películas
        Schema::create('elenco_pelicula', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_elenco');
            $table->unsignedBigInteger('id_pelicula');
            $table->timestamps();

            // Índices únicos para evitar duplicados
            $table->unique(['id_elenco', 'id_pelicula']);

            // Claves foráneas
            $table->foreign('id_elenco')->references('id')->on('elenco')->onDelete('cascade');
            $table->foreign('id_pelicula')->references('id')->on('peliculas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar tablas en orden inverso para respetar dependencias
        Schema::dropIfExists('elenco_pelicula');
        Schema::dropIfExists('peliculas');
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('isrc');
        Schema::dropIfExists('elenco');
        Schema::dropIfExists('directores');
    }
};
