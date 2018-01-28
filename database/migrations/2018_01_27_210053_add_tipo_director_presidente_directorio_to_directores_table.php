<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoDirectorPresidenteDirectorioToDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('directores', function(Blueprint $table) {
            $table->string('tipo_de_director')->after('cargo')->nullable();
            $table->string('presidente_del_directorio')->default('No')->after('tipo_de_director')->nullable();
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
