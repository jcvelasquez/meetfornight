<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idusuario')->unsigned();
            $table->string('url_foto');
            $table->integer('orden');
            $table->foreign('idusuario')->references('id')->on('usuarios');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_profesional');
    }
}
