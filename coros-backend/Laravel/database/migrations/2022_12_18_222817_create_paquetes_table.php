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
        Schema::disableForeignKeyConstraints();
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proveedor_id');
            $table->string('name');
            $table->float('precio');
            $table->string('archivos')->nullable();
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('proveedor_id')->references('id')->on('proveedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
};
