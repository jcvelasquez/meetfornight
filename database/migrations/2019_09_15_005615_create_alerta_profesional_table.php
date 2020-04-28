<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

class CreateAlertaProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerta_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idusuario')->unsigned();
            $table->enum('tipo_cliente',['CLIENTE','PROFESIONAL']);
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('apodo')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->text('razon');
            $table->timestamps();
            $table->foreign('idusuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerta_profesional');
    }
}
