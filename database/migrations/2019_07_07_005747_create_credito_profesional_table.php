<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditoProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credito_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_creditos');
            $table->string('cantidad_creditos');
            $table->dateTime('fecha_creditos');	
            $table->double('costo_creditos');
            $table->double('codpromocional_creditos');
            $table->double('descuento_creditos');
            $table->string('pasarela_creditos');
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
        Schema::dropIfExists('credito_profesional');
    }
}
