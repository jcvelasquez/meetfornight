<?php

use App\Categorias;
use Illuminate\Database\Seeder;


class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        $categoria = new Categorias();
        $categoria->nombre_categoria = 'MUJERES';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'GIGOLOS';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'GAYS';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'TRANS';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'TRAVESTIS';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'FETICHES';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'MASAJES';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'PAREJAS';
        $categoria->estado_categoria = 1;
        $categoria->save();

    }
}
