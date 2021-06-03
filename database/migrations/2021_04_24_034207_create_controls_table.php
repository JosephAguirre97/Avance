<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->id();
        });
        Schema::table('controls', function (Blueprint $table) {
            $table->unsignedBigInteger("id_usuario");
            $table->unsignedBigInteger("id_nivelusuario");
            $table->unsignedBigInteger("id_alerta");
            $table->foreign("id_usuario")->references("id")->on("usuarios")->cascadeOnDelete() ;
            $table->foreign("id_nivelusuario")->references("id")->on("nivel_usuarios")->cascadeOnDelete() ;
            $table->foreign("id_alerta")->references("id")->on("alertas")->cascadeOnDelete() ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controls');
    }
}
