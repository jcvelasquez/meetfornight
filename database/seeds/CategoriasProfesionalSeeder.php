<?php

use App\CategoriasProfesional;
use Illuminate\Database\Seeder;

class CategoriasProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categoria = new CategoriasProfesional();
        $categoria->idprofesional = 34;
        $categoria->idcategoria = 1;
        $categoria->save();

        $categoria = new CategoriasProfesional();
        $categoria->idprofesional = 34;
        $categoria->idcategoria = 2;
        $categoria->save();

        $categoria = new CategoriasProfesional();
        $categoria->idprofesional = 34;
        $categoria->idcategoria = 3;
        $categoria->save();

        $categoria = new CategoriasProfesional();
        $categoria->idprofesional = 34;
        $categoria->idcategoria = 4;
        $categoria->save();

        $categoria = new CategoriasProfesional();
        $categoria->idprofesional = 34;
        $categoria->idcategoria = 5;
        $categoria->save();

    }
}
