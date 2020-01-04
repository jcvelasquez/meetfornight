<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_plan');
            $table->double('precio_plan', 8, 2);
            $table->enum('periodo_plan',['MENSUAL','ANUAL']);
            $table->enum('tipo_usuario',['USUARIO','PROFESIONAL','EMPRESA']);
            $table->string('fondo_plan');
            $table->string('triangulo_plan');
            $table->integer('estado_plan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
