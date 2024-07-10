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
        Schema::create('estado_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('comentario_pedido'); //es el estado del pedido (entregado, en camino, etc...)
            $table->timestamps();
            //Relación 1:1 con cabeza de factura
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
        Schema::dropIfExists('estado_pedidos');
    }
};
