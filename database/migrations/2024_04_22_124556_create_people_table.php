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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre1');
            $table->string('Nombre2');
            $table->string('Apellido1');
            $table->string('Apellido2');
            $table->string('Direccion');
            $table->integer('Num_identificacion');
            $table->string('Correo')->unique();
            $table->string('Telefono');
            $table->timestamps();
            //Relacion 1:1 con la tabla tipo_documento
            $table->unsignedBigInteger('tipo_documento_id');
            $table ->foreignId('tipo_documento')->references('id')->on('tipo_documentos')->onDelete('cascade')->onUpdate('cascade');
            //Relacion 1:1 con ciudad y departamento
            $table->unsignedBigInteger('ciudad');
            $table->foreignId('ciudad')->references('id')->on('ciudads')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('departamento');
            $table->foreignId('departamento')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');

            //Relacion1:1 tipo_tercero
            $table->unsignedBigInteger('tipo_tercero');
            $table->foreignId('tipo_tercero')->references('id')->on('tipo_terceros')->onDelete('cascade')->onUpdate('cascade');
            //Relacion 1:1 con genero
            $table->unsignedBigInteger('genero');
            $table->foreignId('genero')->references('id')->on('generos')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
