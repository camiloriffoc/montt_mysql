<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorizacionesSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorizaciones_sectores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('resoluciones')->nullable();
            $table->timestamps();
            $table->foreign('sociedad_id')->references('id')->on('sociedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autorizaciones_sectores');
    }
}
