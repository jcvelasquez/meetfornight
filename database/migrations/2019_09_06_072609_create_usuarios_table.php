<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idrol')->unsigned();
            $table->string('nombre');
            $table->string('apodo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['M','F']);
            $table->enum('nacionalidad',['PE','PA','ES']);
            $table->enum('idioma',['ES','EN']);
            $table->string('celular');
            $table->enum('tipo_celular',['WHATSAPP','CELULAR']);
            $table->integer('estado');
            $table->timestamps();

            $table->foreign('idrol')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
