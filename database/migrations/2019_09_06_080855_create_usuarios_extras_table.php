<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_extras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idusuario')->unsigned();
            $table->string('frase')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('web')->nullable();
            $table->string('pecho')->nullable();
            $table->string('pene')->nullable();
            $table->string('color_ojos')->nullable();
            $table->string('color_cabello')->nullable();
            $table->string('corte_intimo')->nullable();
            $table->integer('estatura')->nullable();
            $table->integer('peso')->nullable();
            $table->enum('orientacion',['LESBIANA','HETEROSEXUAL','TRANSEXUAL','HOMOSEXUAL','BISEXUAL'])->nullable();
            $table->enum('tipo_contacto',['MENSAJE','CORREO','NA'])->nullable();
            $table->enum('tipo_moneda',['PEN','USD','EUR'])->nullable();
            $table->integer('tatuaje')->nullable();
            $table->integer('piercing')->nullable();
            $table->integer('fumador')->nullable();
            $table->integer('seguridad')->nullable();
            $table->integer('agenda')->nullable();
            $table->integer('verificado')->nullable();
            $table->integer('sanidad')->nullable();
            $table->foreign('idusuario')->references('id')->on('usuarios')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_extras');
    }
}
