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
        Schema::create('calificacion_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_servicio',45);
            $table->integer('calificacion');
            $table->string('comentario_servicio');
            $table->timestamps();
            //Relación 1:M con control de comentarios
            $table->unsignedBigInteger('control_comentarios');
            $table->foreignId('control_comentarios')->references('id')->on('control_comentarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion_servicios');
    }
};
