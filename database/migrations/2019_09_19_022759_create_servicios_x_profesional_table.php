<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosXProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_x_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idservicio')->nullable()->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->string('nombre_servicio')->nullable();
            $table->enum('categoria_servicio',['MASAJES','PRELIMINARES','INTIMO','OTROS','FETICHE','DISCAPACITADOS']);
            $table->foreign('idservicio')->references('id')->on('servicios_profesional');
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
        Schema::dropIfExists('servicios_x_profesional');
    }
}
