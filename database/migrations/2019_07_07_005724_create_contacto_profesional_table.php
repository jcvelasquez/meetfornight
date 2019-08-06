<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_profesional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('celular');
            $table->enum('tipo_celular',['Whatsapp','Celular']);
            $table->enum('tipo_contacto',['Mensaje','Correos','Ninguna de las anteriores']);
            $table->string('web');
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
        Schema::dropIfExists('contacto_profesional');
    }
}
