<?php

use App\CriterioValoracion;
use Illuminate\Database\Seeder;

class CriteriosValoracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "AMABILIDAD";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "SENSUALIDAD";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "CONVERSACIÓN";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "DIVERSIÓN";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "CORRESPONDE A LA FOTO";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "LIMPIEZA";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "BELLEZA";
        $criterio->estado_criterio = 1;
        $criterio->save();

        $criterio = new CriterioValoracion();
        $criterio->nombre_criterio = "PERFORMANCE";
        $criterio->estado_criterio = 1;
        $criterio->save();

    }
}
