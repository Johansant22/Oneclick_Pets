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
        Schema::create('sistema_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('forma_pago',45); //Es para elegir la forma de pago.
            $table->timestamps();
            //Relación 1:M con cabeza factura
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
        Schema::dropIfExists('sistema_pagos');
    }
};
