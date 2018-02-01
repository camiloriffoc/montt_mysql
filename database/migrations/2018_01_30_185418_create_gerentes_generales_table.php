<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerentesGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerentes_generales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('nombre')->nullable();
            $table->string('cargo')->nullable();
            $table->date('fecha_nombramiento')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('rut')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('numero')->nullable();
            $table->string('piso')->nullable();
            $table->string('comuna')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('region')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('profesion')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('skype')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            
            $table->string('nombre_remplazante')->nullable();
            $table->string('rut_remplazante')->nullable();
            $table->string('domicilio_remplazante')->nullable();
            $table->string('numero_remplazante')->nullable();
            $table->string('piso_remplazante')->nullable();
            $table->string('comuna_remplazante')->nullable();
            $table->string('ciudad_remplazante')->nullable();
            $table->string('region_remplazante')->nullable();
            $table->string('estado_remplazante')->nullable();
            $table->string('pais_remplazante')->nullable();
            $table->string('codigo_postal_remplazante')->nullable();
            $table->string('profesion_remplazante')->nullable();
            $table->string('nacionalidad_remplazante')->nullable();
            $table->string('estado_civil_remplazante')->nullable();
            $table->string('correo_electronico_remplazante')->nullable();
            $table->string('skype_remplazante')->nullable();
            $table->string('telefono_remplazante')->nullable();
            $table->string('celular_remplazante')->nullable();
            $table->date('fecha_designacion')->nullable();


            
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
        Schema::dropIfExists('grentes_generales');
    }
}
