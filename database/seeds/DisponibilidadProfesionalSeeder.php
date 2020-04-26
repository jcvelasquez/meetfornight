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
        $disponibilidad->desde = "10:00:00";
        $disponibilidad->hasta = "22:00:00";
        $disponibilidad->dia = 'LUNES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = "15:00:00";
        $disponibilidad->hasta = "20:00:00";
        $disponibilidad->dia = 'MARTES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = "08:00:00";
        $disponibilidad->hasta = "20:00:00";
        $disponibilidad->dia = 'MIERCOLES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = "00:00:00";
        $disponibilidad->hasta = "00:00:00";
        $disponibilidad->dia = 'JUEVES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = "08:00:00";
        $disponibilidad->hasta = "19:00:00";
        $disponibilidad->dia = 'VIERNES';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = "10:00:00";
        $disponibilidad->hasta = "21:00:00";
        $disponibilidad->dia = 'SABADO';
        $disponibilidad->save();

        $disponibilidad = new DisponibilidadProfesional();
        $disponibilidad->idusuario = 34;
        $disponibilidad->desde = "04:00:00";
        $disponibilidad->hasta = "23:00:00";
        $disponibilidad->dia = 'DOMINGO';
        $disponibilidad->save();

    }
}
