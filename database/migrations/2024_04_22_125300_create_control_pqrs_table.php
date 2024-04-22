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
        Schema::create('control_pqrs', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_pqrs');
            $table->tinyInteger('aprobado')->default(0);
            $table->tinyInteger('no_aprobado')->default(1);
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
        Schema::dropIfExists('control_pqrs');
    }
};
