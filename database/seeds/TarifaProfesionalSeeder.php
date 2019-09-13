<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifaProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //SERVICIO
        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => 'Cena',
            'costo_tarifa' => '150',
            'categoria_tarifa' => 'SERVICIO'
            
        ]);

        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => '1h30',
            'costo_tarifa' => '100',
            'categoria_tarifa' => 'SERVICIO'
            
        ]);

        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => '1 Hora',
            'costo_tarifa' => '80',
            'categoria_tarifa' => 'SERVICIO'
            
        ]);


        //ESCORT
        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => 'Gastos de viaje +25km',
            'costo_tarifa' => '140',
            'categoria_tarifa' => 'ESCORT'
            
        ]);

        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => 'Viaje de negocios',
            'costo_tarifa' => '400',
            'categoria_tarifa' => 'ESCORT'
            
        ]);



        //EXTRAS
        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => 'Sauna',
            'costo_tarifa' => '50',
            'categoria_tarifa' => 'EXTRAS'
            
        ]);

        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => 'Sexo al aire libre',
            'costo_tarifa' => '100',
            'categoria_tarifa' => 'EXTRAS'
            
        ]);


        DB::table('tarifa_profesional')->insert([
            'idusuario' => '34',
            'opcion_tarifa' => 'Streaptease',
            'costo_tarifa' => '150',
            'categoria_tarifa' => 'EXTRAS'
            
        ]);




    }
}
