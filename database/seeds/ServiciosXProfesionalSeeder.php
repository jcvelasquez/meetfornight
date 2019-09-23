<?php

use Illuminate\Database\Seeder;

class ServiciosXProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         //PERSONALIZADOS
         DB::table('servicios_x_profesional')->insert([
            'idusuario' => 34,
            'nombre_servicio' => 'PERSONALIZADO '.Str::random(3),
            'categoria_servicio' => 'MASAJES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idusuario' => 34,
            'nombre_servicio' => 'PERSONALIZADO '.Str::random(3),
            'categoria_servicio' => 'MASAJES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idusuario' => 34,
            'nombre_servicio' => 'PERSONALIZADO '.Str::random(3),
            'categoria_servicio' => 'MASAJES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idusuario' => 34,
            'nombre_servicio' => 'PERSONALIZADO '.Str::random(3),
            'categoria_servicio' => 'PRELIMINARES'
        ]);


        //EXISTENTES
        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 5,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'MASAJES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 6,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'MASAJES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 7,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'MASAJES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 8,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'MASAJES'
        ]);


        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 11,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'PRELIMINARES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 13,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'PRELIMINARES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 14,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'PRELIMINARES'
        ]);



        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 17,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'PRELIMINARES'
        ]);

        DB::table('servicios_x_profesional')->insert([
            'idservicio' => 18,
            'idusuario' => 34,
            'nombre_servicio' => '',
            'categoria_servicio' => 'PRELIMINARES'
        ]);



    }
}
