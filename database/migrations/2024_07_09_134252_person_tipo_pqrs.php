<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//Creación de tabla pivot para relacion N:M entre tipo prqs y person
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_tipo_pqrs', function (Blueprint $table) {
            $table->id();
            //Asignacion de claves foraneas
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('tipo_pqrs_id');
            $table->timestamps();

            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_pqrs_id')->references('id')->on('tipo_pqrs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_tipo_pqrs');
    }
};
