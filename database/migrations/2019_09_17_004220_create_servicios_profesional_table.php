<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_profesional', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_servicio');
            $table->enum('categoria_servicio',['MASAJES','PRELIMINARES','INTIMO','OTROS','FETICHE','DISCAPACITADOS']);
            $table->integer('estado_servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_profesional');
    }
}
