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
        //
        DB::table('perfil_usuario')->insert([
            'nombre'=> Str::random(10),
            'apodo'=> Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'clave'=> Str::random(10),
            'fecha_nacimiento'=> '1986-09-25',
            'sexo'=> 'M',
            'nacionalidad'=>'PE',
            'idioma'=>'ES',
            'celular'=> Str::random(10),
            'estado'=> '0'
        ]);


            

    }
}
