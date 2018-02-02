<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsFacultadesAccionista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
         Schema::table('accionistas', function($table) {
            $table->enum('accionista_gerente_representante', array('si','no'))->default('no');
            $table->enum('accionista_director_titular', array('si','no'))->default('no');
            $table->enum('accionista_director_suplente', array('si','no'))->default('no');
            $table->enum('accionista_presidente_directorio', array('si','no'))->default('no');
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
          Schema::table('accionistas', function($table) {
            $table->dropColumn('accionista_gerente_representante');
            $table->dropColumn('accionista_director_titular');
            $table->dropColumn('accionista_director_suplente');
            $table->dropColumn('accionista_presidente_directorio');
        });
    }
}
