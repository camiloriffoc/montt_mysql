<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiscalizadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiscalizadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auditores_externos')->nullable();
            $table->enum('vigente', array('si','no'))->nullable();
            $table->date('fecha_designacion')->nullable();
            $table->date('fecha_revocacion')->nullable();
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
        Schema::dropIfExists('fiscalizadores');
    }
}
