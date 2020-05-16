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
        $reservas->idusuario = 2;
        $reservas->desde = '2019-11-06 10:40:00';
        $reservas->hasta = '2019-11-06 13:00:00';
        $reservas->servicios =  '[{ "id":8, "idusuario":34, "opcion_tarifa" : "Streaptease", "tiempo_tarifa": null, "costo_tarifa" : 150, "categoria_tarifa" : "EXTRAS" },{ "id": 7 , "idusuario" : 34 , "opcion_tarifa" : "Sexo al aire libre" , "tiempo_tarifa" : null , "costo_tarifa" : 100 , "categoria_tarifa" : "EXTRAS" }, {"id" : 6 , "idusuario" : 34 , "opcion_tarifa" : "Sauna" , "tiempo_tarifa" : null , "costo_tarifa" : 50 , "categoria_tarifa" : "EXTRAS" }]' ;
        $reservas->direccion = 'Calle Santa Maritza 174';
        $reservas->extras = 'Me gustaria unos masajes para empezar';
        $reservas->total = 150;
        $reservas->es_aceptada = 0;
        $reservas->se_desplaza = 1;
        $reservas->save();

        $reservas = new ReservasProfesional();
        $reservas->idprofesional = 34;
        $reservas->idusuario = 2;
        $reservas->desde = '2019-11-05 15:10:00';
        $reservas->hasta = '2019-11-05 16:00:00';
        $reservas->servicios =  '[{ "id" : 8,"idusuario":34,"opcion_tarifa":"Streaptease","tiempo_tarifa":null,"costo_tarifa":150,"categoria_tarifa":"EXTRAS"},{"id":7,"idusuario":34,"opcion_tarifa":"Sexo al aire libre","tiempo_tarifa":null,"costo_tarifa":100,"categoria_tarifa":"EXTRAS"},{"id":6,"idusuario":34,"opcion_tarifa":"Sauna","tiempo_tarifa":null,"costo_tarifa":50,"categoria_tarifa":"EXTRAS"}]' ;
        $reservas->direccion = 'Calle Santa Maritza 174';
        $reservas->extras = 'Me gustaria unos masajes para empezar';
        $reservas->total = 200;
        $reservas->es_aceptada = 0;
        $reservas->se_desplaza = 1;
        $reservas->save();

        $reservas = new ReservasProfesional();
        $reservas->idprofesional = 34;
        $reservas->idusuario = 2;
        $reservas->desde = '2019-11-05 18:00:00';
        $reservas->hasta = '2019-11-05 19:20:00';
        $reservas->servicios =  '[{ "id":8,"idusuario":34,"opcion_tarifa":"Streaptease","tiempo_tarifa":null,"costo_tarifa":150,"categoria_tarifa":"EXTRAS"},{"id":7,"idusuario":34,"opcion_tarifa":"Sexo al aire libre","tiempo_tarifa":null,"costo_tarifa":100,"categoria_tarifa":"EXTRAS"},{"id":6,"idusuario":34,"opcion_tarifa":"Sauna","tiempo_tarifa":null,"costo_tarifa":50,"categoria_tarifa":"EXTRAS"}]' ;
        $reservas->direccion = 'Calle Santa Maritza 174';
        $reservas->extras = 'Me gustaria unos masajes para empezar';
        $reservas->total = 80;
        $reservas->es_aceptada = 0;
        $reservas->se_desplaza = 1;
        $reservas->save();

    }
}
