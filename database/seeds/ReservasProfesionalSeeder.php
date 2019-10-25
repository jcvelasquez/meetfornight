<?php

use App\ReservasProfesional;
use Illuminate\Database\Seeder;

class ReservasProfesionalSeeder extends Seeder
{

    


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $reservas = new ReservasProfesional();
        $reservas->idprofesional = 34;
        $reservas->idusuario = 19;
        $reservas->desde = '2019-10-26 10:40:00';
        $reservas->hasta = '2019-10-26 13:00:00';
        $reservas->servicios = '[{ "id" : "1", "servicio": "Servicio 1", "total" : "150"}]';
        $reservas->direccion = 'Calle Santa Maritza 174';
        $reservas->extras = 'Me gustaria unos masajes para empezar';
        $reservas->total = 150.00;
        $reservas->es_aceptada = 1;
        $reservas->save();

        $reservas = new ReservasProfesional();
        $reservas->idprofesional = 34;
        $reservas->idusuario = 19;
        $reservas->desde = '2019-10-26 15:10:00';
        $reservas->hasta = '2019-10-26 16:00:00';
        $reservas->servicios = '[{ "id" : "1", "servicio": "Servicio 1", "total" : "150"}]';
        $reservas->direccion = 'Calle Santa Maritza 174';
        $reservas->extras = 'Me gustaria unos masajes para empezar';
        $reservas->total = 200.00;
        $reservas->es_aceptada = 1;
        $reservas->save();

        $reservas = new ReservasProfesional();
        $reservas->idprofesional = 34;
        $reservas->idusuario = 19;
        $reservas->desde = '2019-10-26 18:00:00';
        $reservas->hasta = '2019-10-26 19:20:00';
        $reservas->servicios = '[{ "id" : "1", "servicio": "Servicio 1", "total" : "150"}]';
        $reservas->direccion = 'Calle Santa Maritza 174';
        $reservas->extras = 'Me gustaria unos masajes para empezar';
        $reservas->total = 80.00;
        $reservas->es_aceptada = 1;
        $reservas->save();

    }
}
