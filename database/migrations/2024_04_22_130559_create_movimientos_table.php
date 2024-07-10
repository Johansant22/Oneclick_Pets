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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_movimiento');
            $table->string('descripcion_movimiento');
            $table->timestamps();
            //Relación 1:M con tabla control devoluciones
            $table->unsignedBigInteger('control_devoluciones');
            $table->foreignId('control_devoluciones')->references('id')->on('control_devoluciones')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};
