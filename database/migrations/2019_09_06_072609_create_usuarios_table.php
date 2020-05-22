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
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('sexo',['M','F','T'])->nullable();
            $table->integer('idcountry')->unsigned();
            $table->integer('idstate')->unsigned();
            $table->integer('idcity')->unsigned();
            $table->enum('idioma',['ES','EN']);
            $table->string('celular')->nullable();
            $table->enum('tipo_celular',['WHATSAPP','CELULAR']);
            $table->integer('estado');
            $table->dateTime('fecha_booster')->nullable();	
            $table->timestamps();

            $table->foreign('idrol')->references('id')->on('roles');
            $table->foreign('idcountry')->references('id')->on('countries');
            $table->foreign('idstate')->references('id')->on('states');
            $table->foreign('idcity')->references('id')->on('cities');

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
