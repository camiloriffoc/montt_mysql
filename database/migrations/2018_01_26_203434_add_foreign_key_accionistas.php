<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAccionistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Agregamos llave foranea para relacionar con Sociedades
        Schema::table('accionistas', function (Blueprint $table) {

            $table->integer('sociedad_id')->unsigned();
            $table->foreign('sociedad_id')->references('id')->on('sociedades');
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
