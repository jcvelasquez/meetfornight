<?php

use App\ValoracionProfesional;
use Illuminate\Database\Seeder;

class ValoracionProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //VALORACION 2
        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 1;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 4;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 2;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 3;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 3;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 1;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 4;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 5;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 5;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 3;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 6;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 4;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 7;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 2;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 8;
        $valoracion->idreserva = 1;
        $valoracion->puntuacion = 5;
        $valoracion->save();


        //VALORACION 3
        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 1;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 5;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 2;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 2;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 3;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 4;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 4;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 3;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 5;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 2;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 6;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 1;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 7;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 5;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 8;
        $valoracion->idreserva = 2;
        $valoracion->puntuacion = 3;
        $valoracion->save();


        //VALORACION 3
        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 1;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 2;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 2;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 1;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 3;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 5;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 4;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 2;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 5;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 5;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 6;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 4;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 7;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 3;
        $valoracion->save();

        $valoracion = new ValoracionProfesional();
        $valoracion->idprofesional = 34;
        $valoracion->idcriterio = 8;
        $valoracion->idreserva = 3;
        $valoracion->puntuacion = 1;
        $valoracion->save();


    }
}
