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
            $table->text('frase');
            $table->string('email')->unique();
            $table->string('clave');
            $table->string('usuario')->unique();
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['Masculino','Femenino','Trans']);
            $table->enum('nacionalidad',['Peruana','Panameña','Española']);
            $table->string('departamento');
            $table->string('distrito');
            $table->string('idioma');
            $table->string('etnia');
            $table->string('pecho');
            $table->string('color_ojos');
            $table->string('cabello');
            $table->string('corte_intimo');
            $table->tinyInteger('estatura');
            $table->tinyInteger('peso');
            $table->enum('orientacion',['Lesbiana','Heterosual','Transexual','Homosexual','Bisexual']);
            $table->tinyInteger('tatuaje');
            $table->tinyInteger('piercing');
            $table->tinyInteger('fumador');
            $table->tinyInteger('seguridad');
            $table->tinyInteger('estado');
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
