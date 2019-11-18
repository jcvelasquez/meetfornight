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
        $frecuencia->fecha_booster = '2019-11-14 13:05:00';
        $frecuencia->save();

        $frecuencia = new FrecuenciaBooster();
        $frecuencia->idprofesional = 34;
        $frecuencia->fecha_booster = '2019-11-15 11:43:00';
        $frecuencia->save();

        $frecuencia = new FrecuenciaBooster();
        $frecuencia->idprofesional = 34;
        $frecuencia->fecha_booster = '2019-11-16 20:50:00';
        $frecuencia->save();

    }
}
