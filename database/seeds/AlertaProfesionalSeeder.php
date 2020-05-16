<?php

use App\AlertaProfesional;
use Illuminate\Database\Seeder;

class AlertaProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $alerta = new AlertaProfesional();
        $alerta->idusuario = 34;
        $alerta->tipo_cliente = "CLIENTE";
        $alerta->nombres = 'Felipe Juan';
        $alerta->apellidos = 'Perez Armando';
        $alerta->apodo = 'farmando3454';
        $alerta->celular = '967554123';
        $alerta->email = 'fperezar3@gmail.com';
        $alerta->razon = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo metus, egestas at sodales eget, commodo sit amet dui. Sed cursus magna at elementum faucibus. Orci varius natoque penatibus et magnis dis parturient montes';
        $alerta->save();


        $alerta = new AlertaProfesional();
        $alerta->idusuario = 34;
        $alerta->tipo_cliente = "CLIENTE";
        $alerta->nombres = 'Martin Pedro';
        $alerta->apellidos = 'Posada Melo';
        $alerta->apodo = 'martin344';
        $alerta->celular = '967554123';
        $alerta->email = 'martinposr34@gmail.com';
        $alerta->razon = 'Mnascetur ridiculus mus. Nunc non elit molestie, laoreet turpis a, dignissim ante. Vestibulum et sem arcu. Sed sed rhoncus mauris, eget imperdiet neque. Ut dignissim imperdiet justo.';
        $alerta->save();




    }
}
