<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtrosPactosEspecialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros_pactos_especiales', function (Blueprint $table) {
            $table->increments('id');
            $table->text('observaciones')->nullable();
            $table->date('fecha')->nullable();
            $table->string('otros_pactos_adjunto')->nullable();
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
        Schema::dropIfExists('otros_pactos_especiales');
    }
}
