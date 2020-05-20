<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguridadUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguridad_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idusuario')->unsigned();
            $table->string('url_foto');
            $table->enum('tipo_foto', ["PERFIL","IDENTIDAD"]);
            $table->foreign('idusuario')->references('id')->on('usuarios');
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
        Schema::dropIfExists('seguridad_usuario');
    }
}
