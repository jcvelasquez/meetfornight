<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorito_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idusuario')->unsigned();
            $table->integer('idprofesional')->unsigned();
            $table->timestamps();
            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
        });

            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorito_usuario');
    }
}
