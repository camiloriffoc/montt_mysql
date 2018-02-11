<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDerechoRetirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derecho_retiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('causales_derecho_retiro')->nullable();
            $table->string('formalidades_disidencia')->nullable();
            $table->string('criterio_valoracion_acciones_disidente')->nullable();
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
        Schema::dropIfExists('derecho_retiros');
    }
}
