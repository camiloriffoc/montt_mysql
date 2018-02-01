<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMenorEdadAccionista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('accionistas', function($table) {
            $table->enum('accionista_menor_edad', array('si','no'))->default('no');
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
            $table->dropColumn('accionista_menor_edad');
        });
    }
}
