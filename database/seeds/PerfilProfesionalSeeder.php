<?php

use Illuminate\Database\Seeder;

class PerfilProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('perfil_profesional')->insert([
            'nombre' => 'Alejandra Carolina Marquez Garcia',
            'apodo' => 'caromelow',
            'frase' => 'Vive la vida y no dejes que la vida te viva',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut magna risus. Vivamus non sem in mauris accumsan sodales. Ut dictum sapien sed ex pulvinar laoreet nec ac velit. ',
            'email'=> 'cmarquez@piwichostudio.com',
            'clave'=> '123456',
            'fecha_nacimiento'=> '1996-06-13',
            'sexo'=> 'F',
            'nacionalidad'=>'PE',
            'idioma' =>'ES',
            'departamento' => 'Lima',
            'distrito' => 'San Miguel',
            'etnia' => 'Caucasica',
            'pecho' => 'B',
            'pene' => '',
            'color_ojos' => 'Verdes Pardos',
            'color_cabello' => 'Negro',
            'corte_intimo' => 'Natural',
            'estatura' => '170',
            'peso' => '75',
            'orientacion' => 'LESB',
            'tatuaje' => '1',
            'piercing' => '1',
            'fumador' => '0',
            'seguridad' => '1',
            'estado'=> '1'
        ]);


        DB::table('perfil_profesional')->insert([
            'nombre' => 'Jose Claudio Velasquez Boyer',
            'apodo' => 'pollitonmushroom',
            'frase' => 'Carpe Diem',
            'descripcion' => 'Vivamus dignissim quis ligula vel venenatis. Sed pretium volutpat lacus, non pretium felis efficitur vel. Morbi accumsan posuere enim aliquet feugiat. Phasellus mattis lobortis dolor',
            'email'=> 'jcvelasquez@piwichostudio.com',
            'clave'=> '123456',
            'fecha_nacimiento'=> '1986-09-25',
            'sexo'=> 'M',
            'nacionalidad'=>'PE',
            'idioma' =>'ES',
            'departamento' => 'Lima',
            'distrito' => 'San Martin de Porres',
            'etnia' => 'Trigueño',
            'pecho' => '',
            'pene' => 'Si',
            'color_ojos' => 'Marrones',
            'color_cabello' => 'Negro',
            'corte_intimo' => 'Natural',
            'estatura' => '173',
            'peso' => '80',
            'orientacion' => 'HETE',
            'tatuaje' => '1',
            'piercing' => '0',
            'fumador' => '1',
            'seguridad' => '1',
            'estado'=> '1'
        ]);





    }
}
