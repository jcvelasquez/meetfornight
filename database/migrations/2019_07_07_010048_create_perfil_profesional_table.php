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
            $table->text('descripcion');
            $table->string('email')->unique();
            $table->string('clave');
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['M','F']);
            $table->enum('nacionalidad',['PE','PA','ES']);
            $table->enum('idioma',['ES','EN']);
            $table->string('departamento');
            $table->string('distrito');
            $table->string('etnia');
            $table->string('pecho');
            $table->string('pene');
            $table->string('color_ojos');
            $table->string('color_cabello');
            $table->string('corte_intimo');
            $table->integer('estatura');
            $table->integer('peso');
            $table->enum('orientacion',['LESB','HETE','TRAN','HOMO','BISE']);
            $table->integer('tatuaje');
            $table->integer('piercing');
            $table->integer('fumador');
            $table->integer('seguridad');
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
