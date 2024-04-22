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
