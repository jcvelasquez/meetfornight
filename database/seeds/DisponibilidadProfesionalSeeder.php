<?php

use App\DisponibilidadProfesional;
use Illuminate\Database\Seeder;

class DisponibilidadProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 2;
        $disponibilidad->hasta = 15;
        $disponibilidad->dia = 'LUNES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 5;
        $disponibilidad->hasta = 23;
        $disponibilidad->dia = 'MARTES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 8;
        $disponibilidad->hasta = 20;
        $disponibilidad->dia = 'MIERCOLES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 11;
        $disponibilidad->hasta = 22;
        $disponibilidad->dia = 'JUEVES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 8;
        $disponibilidad->hasta = 19;
        $disponibilidad->dia = 'VIERNES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 10;
        $disponibilidad->hasta = 21;
        $disponibilidad->dia = 'SABADO';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = 4;
        $disponibilidad->hasta = 23;
        $disponibilidad->dia = 'DOMINGO';
        $disponibilidad->save();

    }
}
