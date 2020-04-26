<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoosterProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booster_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idprofesional')->unsigned();
            $table->enum('frecuencia',['DESACTIVADO','AUTOMATICO','MANUAL']);
            $table->string('intervalo');
            $table->integer('desactivarNoche');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
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
        Schema::dropIfExists('booster_profesional');
    }
}
