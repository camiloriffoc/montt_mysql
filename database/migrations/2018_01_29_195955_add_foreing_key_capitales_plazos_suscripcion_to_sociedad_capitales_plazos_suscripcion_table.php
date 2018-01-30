<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingKeyCapitalesPlazosSuscripcionToSociedadCapitalesPlazosSuscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('capitales_plazos_suscripcion', function(Blueprint $table) {
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
