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
            $table->string('web')->nullable();
            $table->string('pecho')->nullable();
            $table->string('pene')->nullable();
            $table->string('color_ojos');
            $table->string('color_cabello');
            $table->string('corte_intimo')->nullable();
            $table->integer('estatura');
            $table->integer('peso');
            $table->enum('orientacion',['LESBIANA','HETEROSEXUAL','TRANSEXUAL','HOMOSEXUAL','BISEXUAL']);
            $table->enum('tipo_contacto',['MENSAJE','CORREO','NA'])->nullable();
            $table->enum('tipo_moneda',['PEN','USD','EUR']);
            $table->integer('tatuaje');
            $table->integer('piercing');
            $table->integer('fumador');
            $table->integer('seguridad');
            $table->integer('agenda')->nullable();
            
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
