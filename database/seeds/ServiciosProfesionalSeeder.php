<?php

use Illuminate\Database\Seeder;

class ServiciosProfesionalSeeder extends Seeder
{

    
    public function run()
    {
        

        //MASAJES
        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body '.Str::random(3) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1  
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Hot stone massage '.Str::random(3) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body'.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje con final feliz (manual) '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Nuru '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje sobre mesa de masaje '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Tantra '.Str::random(4) ,
            'categoria_servicio' => 'MASAJES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);


        //PRELIMINARES
        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body '.Str::random(3) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Hot stone massage '.Str::random(3) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body'.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje con final feliz (manual) '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Nuru '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje sobre mesa de masaje '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Tantra '.Str::random(4) ,
            'categoria_servicio' => 'PRELIMINARES',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);


        //INTIMO
        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body '.Str::random(3) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Hot stone massage '.Str::random(3) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body'.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje con final feliz (manual) '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Nuru '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje sobre mesa de masaje '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Tantra '.Str::random(4) ,
            'categoria_servicio' => 'INTIMO',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);


        //OTROS SERVICIOS
        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body '.Str::random(3) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Hot stone massage '.Str::random(3) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body'.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje con final feliz (manual) '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Nuru '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje sobre mesa de masaje '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Tantra '.Str::random(4) ,
            'categoria_servicio' => 'OTROS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);


        //FETICHE
        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body '.Str::random(3) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Hot stone massage '.Str::random(3) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body'.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje con final feliz (manual) '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Nuru '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje sobre mesa de masaje '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Tantra '.Str::random(4) ,
            'categoria_servicio' => 'FETICHE',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);


        //DISCAPACITADOS
        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body '.Str::random(3) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Hot stone massage '.Str::random(3) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Body to body'.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje con final feliz (manual) '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Nuru '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje de próstata '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje sobre mesa de masaje '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);

        DB::table('servicios_profesional')->insert([
            'nombre_servicio' => 'Masaje Tantra '.Str::random(4) ,
            'categoria_servicio' => 'DISCAPACITADOS',
            'estado_servicio' => 1,
            'es_admin' => 1 
        ]);





    }
}
