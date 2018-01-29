<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accionistas', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('tipo_accionista', array('natural','juridica'));
            $table->string('nombre')->nullable();
            $table->string('rut')->nullable();
            $table->string('domicilio_calle')->nullable();
            $table->string('domicilio_numero')->nullable();
            $table->string('domicilio_piso')->nullable();
            $table->string('domicilio_comuna')->nullable();
            $table->string('domicilio_ciudad')->nullable();
            $table->string('domicilio_region_provincia_barra')->nullable();
            $table->string('domicilio_estado')->nullable();
            $table->string('domicilio_pais')->nullable();
            $table->string('domicilio_codigo_postal')->nullable();
            $table->string('profesion')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('mayor_de_edad')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('skype')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('idiomas')->nullable();
            $table->string('actividad_que_desempena')->nullable();

            //Filas Personas Juridicas
            $table->string('razon_social')->nullable();
            $table->string('filiales')->nullable();
            $table->string('personerias_y_proxys')->nullable();
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
        Schema::dropIfExists('accionistas');
    }
}
