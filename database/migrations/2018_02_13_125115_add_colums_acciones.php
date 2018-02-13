<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsAcciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('acciones', function($table) {
            $table->string('voto')->nullable();
            $table->string('dividendos')->nullable();
            $table->string('liquidacion')->nullable();
            $table->string('cargas')->nullable();
            $table->string('otras_preferencias_especiales')->nullable();


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
