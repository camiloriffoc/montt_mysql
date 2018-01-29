<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTituloAccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo_acciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_titulo')->nullable();
            $table->string('vigente_inutilizable')->nullable();
            $table->string('numero_acciones')->nullable();
            $table->string('tipo_acciones')->nullable();
            $table->string('fecha_suscripcion_compra')->nullable();
            $table->string('pagada_o_no')->nullable();
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
        Schema::dropIfExists('titulo_acciones');
    }
}
