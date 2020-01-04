<?php

use App\IdiomasProfesional;
use Illuminate\Database\Seeder;

class IdiomasProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $idioma = new IdiomasProfesional();
        $idioma->nombre_idioma = 'Español';
        $idioma->estado_idioma = 1;
        $idioma->save();

        $idioma = new IdiomasProfesional();
        $idioma->nombre_idioma = 'Ingles';
        $idioma->estado_idioma = 1;
        $idioma->save();

        $idioma = new IdiomasProfesional();
        $idioma->nombre_idioma = 'Frances';
        $idioma->estado_idioma = 1;
        $idioma->save();

        $idioma = new IdiomasProfesional();
        $idioma->nombre_idioma = 'Italiano';
        $idioma->estado_idioma = 1;
        $idioma->save();

        $idioma = new IdiomasProfesional();
        $idioma->nombre_idioma = 'Aleman';
        $idioma->estado_idioma = 1;
        $idioma->save();

    }
}
