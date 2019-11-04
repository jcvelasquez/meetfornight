<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasProfesionalTable extends Migration
{

    
    public function up()
    {
        Schema::create('reservas_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idprofesional')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->dateTime('desde');
            $table->dateTime('hasta');
            $table->json('servicios');
            $table->integer('se_desplaza');
            $table->string('direccion', 250)->nullable();
            $table->text('extras')->nullable();
            $table->double('total', 8, 2);
            $table->integer('es_aceptada');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('reservas_profesional');
    }


}
