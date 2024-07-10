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
        Schema::create('cuerpo_facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_productos');
            $table->integer('total_productos');
            $table->timestamps();
            //Relación 1:M con la tabla inventario
            $table->unsignedBigInteger('inventario');
            $table->foreignId('inventario')->references('id')->on('inventarios')->onDelete('cascade')->onUpdate('cascade');
             //Relación 1:1 con la tabla cabeza_factura
             $table->unsignedBigInteger('cabeza_factura');
             $table->foreignId('cabeza_factura')->references('id')->on('cabeza_facturas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuerpo_facturas');
    }
};
