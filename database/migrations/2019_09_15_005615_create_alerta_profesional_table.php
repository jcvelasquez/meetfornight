<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertaProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerta_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idusuario')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('idalerta');
            $table->string('celular');
            $table->string('email');
            $table->text('razon');
            $table->timestamps();
            $table->foreign('idusuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerta_profesional');
    }
}
