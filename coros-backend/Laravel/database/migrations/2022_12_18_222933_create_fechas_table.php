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
        Schema::create('fechas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('mes_id');
            $table->unsignedBigInteger('dia_id');
            $table->unsignedBigInteger('hora_id');
            $table->boolean('disponibilidad');
            $table->timestamps();

            $table->foreign('proveedor_id')->references('id')->on('proveedors');
            $table->foreign('mes_id')->references('id')->on('mes');
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->foreign('hora_id')->references('id')->on('horas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fechas');
    }
};
