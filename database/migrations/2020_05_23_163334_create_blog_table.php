<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idcountry')->unsigned();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('slug');
            $table->string('imagen');
            $table->string('imagen_alt');
            $table->string('descripcion_seo');
            $table->string('keywords_seo');
            $table->text('contenido');
            $table->foreign('idcountry')->references('id')->on('countries');
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
        Schema::dropIfExists('blog');
    }
}
