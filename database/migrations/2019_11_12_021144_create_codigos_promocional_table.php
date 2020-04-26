<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigosPromocionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos_promocional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo_promocional');
            $table->string('descripcion_codigo');
            $table->enum('tipo_descuento',['PORCENTAJE','MONTO']);
            $table->double('valor_codigo');
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
        Schema::dropIfExists('codigos_promocional');
    }
}
