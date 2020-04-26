<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idprofesional')->unsigned();
            $table->string('metodo_pago');
            $table->integer('cantidad_creditos');
            $table->double('monto_creditos');
            $table->string('codigo_promocional')->nullable();
            $table->double('descuento_creditos')->nullable();
            $table->double('total_creditos');
            $table->foreign('idprofesional')->references('id')->on('usuarios');
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
        Schema::dropIfExists('creditos_profesional');
    }
}
