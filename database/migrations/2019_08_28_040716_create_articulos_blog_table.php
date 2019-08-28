<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('articulos_blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('categoria_id')->unsigned();
            $table->string('titulo');
            $table->text('descripcion');
            $table->boolean('estado')->default(1);
            $table->timestamps();

        });

        Schema::table('articulos_blog', function($table) {
            $table->foreign('categoria_id')->references('id')->on('categorias_blog');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_blog');
    }
}
