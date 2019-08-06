<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apodo');
            $table->string('email')->unique();
            $table->string('clave');
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['M','F']);
            $table->enum('nacionalidad',['PE','PA','ES']);
            $table->enum('idioma',['ES','EN']);
            $table->string('celular');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {

        Schema::table('perfil_usuario', function (Blueprint $table) {
            //$table->string('name', 50)->change();
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function renameColumn()
    {

        Schema::table('perfil_usuario', function (Blueprint $table) {
            $table->renameColumn('from', 'to');
        });

    }

     

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_usuario');
    }
}
