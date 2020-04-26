<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idprofesional')->unsigned();
            $table->integer('idplan')->unsigned();
            $table->integer('meses_suscripcion');
            $table->dateTime('inicio_suscripcion');
            $table->integer('estado_suscripcion');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
            $table->foreign('idplan')->references('id')->on('planes');
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
        Schema::dropIfExists('planes_profesional');
    }
}
