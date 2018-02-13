<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormaDisolucionLiquidacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_disolucion_liquidacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forma_disolucion_liquidacion_adjunto')->nullable();
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
        Schema::dropIfExists('forma_disolucion_liquidacions');
    }
}
