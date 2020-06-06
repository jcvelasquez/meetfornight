<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 12, 25, "America/Lima")
        ]);

        
        DB::table('usuarios')->insert([
            'idrol' => '3',
            'nombre' => "Alejandra Carolina Marquez Garcia",
            'email'=> 'cmarquez@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 13, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 14, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 15, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 16, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 17, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 18, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 19, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 20, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 21, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 22, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 2, 23, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 1, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 2, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 3, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 4, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 5, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 6, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 7, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 8, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 9, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 10, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 11, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 12, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 13, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 14, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 15, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 16, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 17, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 18, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 19, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 20, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 21, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> 'jcvelasquez@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => 'piwicho',
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 22, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 3, 23, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 4, 1, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 4, 2, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 4, 3, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '2',
            'nombre' => "Cesar Eduardo Lozano Arevalo",
            'email'=> 'ventas@minegociovr.pe',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=>172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 4, 4, 25, "America/Lima")
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'idcountry'=> 172,
            'idstate'=> random_int ( 2812, 2864 ),
            'idcity'=> random_int ( 31986, 32219 ),
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'created_at' => Carbon::create(2020, 5, 4, 5, 25, "America/Lima")
        ]);



    }
}
