<?php

use Illuminate\Database\Seeder;

class UsuariosExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('usuarios_extras')->insert([
            'idusuario' => '1',
            'frase' => 'Vive la vida y no dejes que la vida te viva',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut magna risus. Vivamus non sem in mauris accumsan sodales. Ut dictum sapien sed ex pulvinar laoreet nec ac velit. ',
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
            'seguridad' => '1'
        ]);



        DB::table('usuarios_extras')->insert([
            'idusuario' => '2',
            'frase' => 'Carpe Diem',
            'descripcion' => 'Vivamus dignissim quis ligula vel venenatis. Sed pretium volutpat lacus, non pretium felis efficitur vel. Morbi accumsan posuere enim aliquet feugiat. Phasellus mattis lobortis dolor',
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
        ]);



    }
}
