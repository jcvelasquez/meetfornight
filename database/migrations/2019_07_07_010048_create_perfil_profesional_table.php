<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apodo');
            $table->string('email')->unique();
            $table->string('clave');
            $table->string('usuario')->unique();
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['Masculino','Femenino','Trans']);
            $table->enum('nacionalidad',['Peru','Panama','España']);
            $table->integer('estado');
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
        Schema::dropIfExists('perfil_profesional');
    }
}
