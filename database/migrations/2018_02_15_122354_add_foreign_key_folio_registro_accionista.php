<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyFolioRegistroAccionista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Agregamos llave foranea para relacionar con accionista
        Schema::table('folio_registro_accionistas', function (Blueprint $table) {

            $table->integer('accionista_id')->unsigned();
            $table->foreign('accionista_id')->references('id')->on('accionistas')->onDelete('cascade');
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
