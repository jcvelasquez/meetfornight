<?php

use App\Planes;
use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $plan = new Planes();
        $plan->nombre_plan = "FREE";
        $plan->periodo_plan = "MENSUAL";
        $plan->precio_plan = 0;
        $plan->tipo_usuario = "USUARIO";
        $plan->fondo_plan = "bg-tipo-plomo";
        $plan->triangulo_plan = "triangulo-beta.png";
        $plan->estado_plan = 1;
        $plan->save();

        

        $plan = new Planes();
        $plan->nombre_plan = "FREE PLUS";
        $plan->periodo_plan = "MENSUAL";
        $plan->precio_plan = 10.99;
        $plan->tipo_usuario = "USUARIO";
        $plan->fondo_plan = "bg-tipo-cuenta";
        $plan->triangulo_plan = "triangulo-beta-free.png";
        $plan->estado_plan = 0;
        $plan->save();

        $plan = new Planes();
        $plan->nombre_plan = "FREE";
        $plan->periodo_plan = "MENSUAL";
        $plan->precio_plan = 0;
        $plan->tipo_usuario = "PROFESIONAL";
        $plan->fondo_plan = "bg-tipo-plomo";
        $plan->triangulo_plan = "triangulo-beta.png";
        $plan->estado_plan = 1;
        $plan->save();

        $plan = new Planes();
        $plan->nombre_plan = "PREMIUM";
        $plan->precio_plan = 29.99;
        $plan->periodo_plan = "MENSUAL";
        $plan->estado_plan = 0;
        $plan->fondo_plan = "bg-tipo-cuenta";
        $plan->triangulo_plan = "triangulo-beta-free.png";
        $plan->tipo_usuario = "PROFESIONAL";
        $plan->save();

        $plan = new Planes();
        $plan->nombre_plan = "PLATINUM";
        $plan->periodo_plan = "MENSUAL";
        $plan->precio_plan = 39.99;
        $plan->tipo_usuario = "PROFESIONAL";
        $plan->fondo_plan = "bg-tipo-plomo";
        $plan->triangulo_plan = "triangulo-beta.png";
        $plan->estado_plan = 0;
        $plan->save();    

    }

}
