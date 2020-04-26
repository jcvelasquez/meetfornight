<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PerfilUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table('perfil_usuario')->insert([
            'nombre'=> 'Jose Claudio Junior Velasquez Boyer',
            'apodo'=> 'piwicho',
            'email'=> 'jcjrvb@gmail.com',
            'clave'=> '123456',
            'fecha_nacimiento'=> '1986-09-25',
            'sexo'=> 'M',
            'nacionalidad'=>'PE',
            'idioma'=>'ES',
            'celular'=> '967994927',
            'estado'=> '1'
        ]);

        DB::table('perfil_usuario')->insert([
            'nombre'=> 'Julio Alberto Lozano Arevalo',
            'apodo'=> 'betrico',
            'email'=> 'lozano-julio@hotmail.com',
            'clave'=> '123456',
            'fecha_nacimiento'=> '1995-09-17',
            'sexo'=> 'M',
            'nacionalidad'=>'PE',
            'idioma'=>'ES',
            'celular'=> '954789632',
            'estado'=> '1'
        ]);


            

    }
}
