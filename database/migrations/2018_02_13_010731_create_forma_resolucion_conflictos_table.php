<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormaResolucionConflictosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_resolucion_conflictos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('justicia_ordinaria_arbitraje')->nullable();
            $table->string('tipo_arbitro')->nullable();
            $table->string('forma_designacion')->nullable();
            $table->string('designacion_arbitros')->nullable();
            $table->string('clausula_estatutos_adjunto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forma_resolucion_conflictos');
    }
}
