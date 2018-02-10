<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToGerentesGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gerentes_generales', function($table) {
            $table->string('apellidos_remplazante')->after('nombre_remplazante')->nullable();
            $table->string('rut_file_remplazante')->after('rut_remplazante')->nullable();
            $table->string('fecha_designacion_file')->after('fecha_designacion')->nullable();
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
