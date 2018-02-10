<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectoresCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspectores_cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('sociedad_eximida')->nullable();
            $table->string('sociedad_eximida_file')->nullable();
            $table->string('señala_mecanismo')->nullable();
            $table->string('señala_mecanismo_file')->nullable();
            $table->string('titular_tipo')->nullable();
            $table->string('titular_vigente')->nullable();
            $table->string('titular_fecha_designacion')->nullable();
            $table->string('titular_fecha_designacion_file')->nullable();
            $table->string('titular_fecha_renovacion')->nullable();
            $table->string('titular_reportes')->nullable();
            $table->string('titular_reportes_file')->nullable();

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
        Schema::dropIfExists('inspectores_cuentas');
    }
}
