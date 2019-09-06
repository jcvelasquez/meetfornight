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
            $table->integer('idusuario')->unsigned();
            $table->text('frase');
            $table->text('descripcion');
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
