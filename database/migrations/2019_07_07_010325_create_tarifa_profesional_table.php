<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifaProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifa_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tiempo_tarifa');
            $table->double('costo_tarifa');
            $table->enum('categoria_tarifa',['TARIFAS PRIVADAS','ESCORT','EXTRAS']);
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
        Schema::dropIfExists('tarifa_profesional');
    }
}
