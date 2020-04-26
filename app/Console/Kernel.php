<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;
use App\FrecuenciaBooster;
use App\BoosterCobrado;
use App\BoosterProfesional;


use App\Usuario;
use Carbon\Carbon;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    
    protected $commands = [
        //
    ];

    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function () {


            //GENERA LOS COBROS DE BOOSTERS MANUALES
            $boosters = FrecuenciaBooster::whereBetween('booster_frecuencia_profesional.fecha_booster', [Carbon::now()->format('Y-m-d H:i:00'), Carbon::now()->format('Y-m-d H:i:59')])->join('booster_profesional','booster_profesional.idprofesional','=','booster_frecuencia_profesional.idprofesional')->where('booster_profesional.frecuencia','=','MANUAL')->get();

            if (!$boosters->isEmpty()) { 
                foreach($boosters as $boost){
                    $cobrado = new BoosterCobrado();
                    $cobrado->idprofesional = $boost->idprofesional;
                    $cobrado->idcategoria = $boost->idcategoria;
                    $cobrado->cantidad_boosters = 2;
                    $cobrado->save();
                }
            }

            //GENERA LOS BOOSTERS AUTOMATICOS


        

        });

    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
