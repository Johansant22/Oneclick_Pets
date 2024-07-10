<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabeza_facturas', function (Blueprint $table) {
            $table->id();
            $table->float('total');
            $table->dateTime('fecha_compra');
            $table->timestamps();
            //relacion 1:M con la tabla person
            $table->unsignedBigInteger('person');
            $table->foreignId('person')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            //relacion 1:M con la tabla empresa
            $table->unsignedBigInteger('empresa');
            $table->foreignId('empresa')->references('id')->on('empresas')->onDelete('cascade')->onUpdate('cascade');
            //relacion 1:M con la tabla empresa
            $table->unsignedBigInteger('calificacion_servicio');
            $table->foreignId('calificacion_servicio')->references('id')->on('calificacion_servicios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabeza_facturas');
    }
};
