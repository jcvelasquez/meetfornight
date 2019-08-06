<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_servicio');
            $table->enum('categoria_servicio',['MASAJES','PRELIMINARES','INTIMO','OTROS SERVICIOS','FETICHE','DISCAPACTIDAOS']);
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
        Schema::dropIfExists('servicio_profesional');
    }
}
