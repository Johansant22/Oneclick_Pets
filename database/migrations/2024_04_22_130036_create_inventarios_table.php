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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_inicial');
            $table->integer('cantidad_final');
            $table->integer('cantidad_total');
            $table->integer('cantidad_entradas');
            $table->integer('valor_venta');
            $table->integer('precio_unit_entradas');
            $table->string('total_entradas');
            $table->integer('precio_total_entradas');
            $table->integer('cantidad_salidas');
            $table->integer('precio_unit_salidas');
            $table->string('total_salidas');
            $table->float('precio_total_salidas');
            $table->timestamps();

            //relacion 1:M con la tabla person
            $table->unsignedBigInteger('person');
            $table->foreignId('person')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            //relación 1:M con la tabla productos
            $table->unsignedBigInteger('producto');
            $table->foreignId('producto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            //Relación 1:M con tabla movimiento
            $table->unsignedBigInteger('movimiento');
            $table->foreignId('movimiento')->references('id')->on('movimientos')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
};
