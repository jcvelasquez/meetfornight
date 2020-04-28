<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje_profesional', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idprofesional')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('mensaje');
            $table->integer('es_leido');
            $table->timestamps();
        });

        Schema::table('mensaje_profesional', function (Blueprint $table)
        {

            $table->foreign('idprofesional')->references('id')->on('usuarios');
            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->foreign('parent_id')->references('id')->on('mensaje_profesional')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensaje_profesional');
    }
}
