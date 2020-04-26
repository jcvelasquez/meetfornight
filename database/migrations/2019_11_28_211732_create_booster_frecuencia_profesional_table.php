<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoosterFrecuenciaProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booster_frecuencia_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idprofesional')->unsigned();
            $table->integer('idcategoria')->unsigned();
            $table->dateTime('fecha_booster');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
            $table->foreign('idcategoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('booster_frecuencia_profesional');
    }
}
