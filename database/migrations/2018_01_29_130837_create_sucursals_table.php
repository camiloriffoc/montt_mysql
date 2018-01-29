<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sucursal_calle')->nullable();
            $table->string('sucursal_numero')->nullable();
            $table->string('sucursal_piso')->nullable();
            $table->string('sucursal_comuna')->nullable();
            $table->string('sucursal_ciudad')->nullable();
            $table->string('sucursal_region_provincia_barra')->nullable();
            $table->string('sucursal_estado')->nullable();
            $table->string('sucursal_pais')->nullable();
            $table->string('sucursal_codigo_postal')->nullable();
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
        Schema::dropIfExists('sucursals');
    }
}
