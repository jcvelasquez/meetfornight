<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisponibilidadProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dia');
            $table->string('desde');
            $table->string('hasta');
            $table->integer('es_todoeldia');
            $table->integer('es_disponible');
            $table->integer('es_agendacompartida');
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
        Schema::dropIfExists('disponibilidad_profesional');
    }
}
