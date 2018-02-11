<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListadoOpcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listado_opciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_de_opcion')->nullable();
            $table->string('titular_opcion')->nullable();
            $table->string('acciones_subyacentes')->nullable();
            $table->date('vencimiento_opcion')->nullable();
            $table->string('cesionario_opcion')->nullable();
            $table->string('ejecutada')->nullable();
            $table->string('cancelacion_opcion')->nullable();
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
        Schema::dropIfExists('listado_opciones');
    }
}
