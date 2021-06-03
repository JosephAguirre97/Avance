<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->id();
            $table->string("informacion",100);
            $table->string("usuarioalertando",100);
            $table->integer("dislike");
            $table->integer("like");
        });
        Schema::table('alertas', function (Blueprint $table) {
            $table->unsignedBigInteger("id_comentario");
            $table->unsignedBigInteger("id_zona");
            $table->unsignedBigInteger("id_tipoalerta");
            $table->foreign("id_comentario")->references("id")->on("comentario_alertas")->cascadeOnDelete() ;
            $table->foreign("id_zona")->references("id")->on("zonas")->cascadeOnDelete() ;
            $table->foreign("id_tipoalerta")->references("id")->on("tipo_alertas")->cascadeOnDelete() ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alertas');
    }
}
