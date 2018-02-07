<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForInputsFilesToPoderesApoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('poderes_apoderados', function($table) {
            $table->string('fecha_nombramiento_file')->after('fecha_nombramiento')->nullable();
            $table->string('rut_file')->after('rut')->nullable();
            $table->string('instrumento_consta_poder_file')->after('instrumento_consta_poder')->nullable();
            $table->string('poder_inscrito_cbr_file')->after('poder_inscrito_cbr')->nullable();
            $table->string('inscripcion_renovacion_cbr_file')->after('inscripcion_renovacion_cbr')->nullable();
            $table->string('instrumento_revocacion_de_poder_file')->after('instrumento_revocacion_de_poder')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
