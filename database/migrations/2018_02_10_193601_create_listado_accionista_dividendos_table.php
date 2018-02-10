<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListadoAccionistaDividendosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listado_accionista_dividendos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_razon_social')->nullable();
            $table->string('numero_acciones')->nullable();
            $table->string('serie_acciones')->nullable();
            $table->string('porcentaje_capital_derecho_dividendo')->nullable();
            $table->string('residente_chile')->nullable();
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
        Schema::dropIfExists('listado_accionista_dividendos');
    }
}
