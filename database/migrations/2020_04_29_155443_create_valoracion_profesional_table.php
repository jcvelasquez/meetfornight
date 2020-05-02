<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoracion_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idprofesional')->unsigned();
            $table->integer('idcriterio')->unsigned();
            $table->integer('idreserva')->unsigned();
            $table->integer('puntuacion');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
            $table->foreign('idcriterio')->references('id')->on('criterios_valoracion');
            $table->foreign('idreserva')->references('id')->on('reservas_profesional');
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
        Schema::dropIfExists('valoracion_profesional');
    }
}
