<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('patente')->primary(); // Usamos patente como clave primaria
            $table->integer('anio');
            $table->string('tipo_vehiculo');
            $table->boolean('disponibilidad')->default(true);
            $table->string('modelo');
            $table->string('imagen')->nullable(); // Campo para la imagen, opcional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
