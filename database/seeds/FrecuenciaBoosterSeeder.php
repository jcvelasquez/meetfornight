<?php

use App\FrecuenciaBooster;
use Illuminate\Database\Seeder;

class FrecuenciaBoosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $frecuencia = new FrecuenciaBooster();
        $frecuencia->idprofesional = 34;
        $frecuencia->idcategoria = 1;
        $frecuencia->fecha_booster = '2019-11-27 13:05:00';
        $frecuencia->save();

        $frecuencia = new FrecuenciaBooster();
        $frecuencia->idprofesional = 34;
        $frecuencia->idcategoria = 8;
        $frecuencia->fecha_booster = '2019-11-27 11:43:00';
        $frecuencia->save();

        $frecuencia = new FrecuenciaBooster();
        $frecuencia->idprofesional = 34;
        $frecuencia->idcategoria = 3;
        $frecuencia->fecha_booster = '2019-11-27 20:50:00';
        $frecuencia->save();

    }
}
