<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsAccionistaInterdiccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accionistas', function($table) {
            $table->string('interdiccion_titulo')->nullable();
            $table->string('interdiccion_numero_acciones')->nullable();
            $table->date('interdiccion_fecha_interdiccion')->nullable();
            $table->string('interdiccion_tutor_curador')->nullable();
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
