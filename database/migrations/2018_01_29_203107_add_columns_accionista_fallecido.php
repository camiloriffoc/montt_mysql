<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsAccionistaFallecido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accionistas', function($table) {
            $table->string('fallecido_numero_acciones')->nullable();
            $table->string('fallecido_fecha_fallecimiento')->nullable();
            $table->string('fallecido_designacion_albacea_administrador')->nullable();
            $table->string('fallecido_tramites_libre_transferencia')->nullable();
            $table->string('fallecido_rut_comunidad')->nullable();
            $table->string('fallecido_nomina_herederos')->nullable();

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
