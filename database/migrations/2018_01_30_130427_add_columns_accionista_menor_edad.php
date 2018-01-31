<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsAccionistaMenorEdad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accionistas', function($table) {
            $table->string('menor_titulo')->nullable();
            $table->string('menor_numero_acciones')->nullable();
            $table->date('menor_fecha_nacimiento')->nullable();
            $table->string('menor_fecha_mayoria_edad')->nullable();
            $table->string('menor_representante_legal')->nullable();
            $table->string('menor_sentencia_especifica')->nullable();

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
