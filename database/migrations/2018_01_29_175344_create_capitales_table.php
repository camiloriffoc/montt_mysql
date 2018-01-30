<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('capitales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('capital_fijo_o_variable')->nullable();
            $table->string('denominaicon_moneda_capital')->nullable();
            $table->string('capital_autorizado')->nullable();
            $table->string('capital_revalorizado')->nullable();
            $table->string('capital_autorizado_escrito')->nullable();
            $table->string('capital_revalorizado_escrito')->nullable();
            $table->string('capital_suscrito')->nullable();
            $table->string('capital_por_suscribir')->nullable();
            $table->string('capital_suscrito_divisa')->nullable();
            $table->string('capital_pendiente_por_suscribir_divisa')->nullable();
            $table->string('capital_pagado')->nullable();
            $table->string('capital_pendiente_pago')->nullable();
            $table->string('capital_pagado_divisa')->nullable();
            $table->string('capital_pendiente_pago_divisa')->nullable();
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
        Schema::dropIfExists('capitales');
    }
}
