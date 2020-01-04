<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


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
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        
        DB::table('usuarios')->insert([
            'idrol' => '3',
            'nombre' => "Alejandra Carolina Marquez Garcia",
            'email'=> 'cmarquez@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> 'jcvelasquez@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => 'piwicho',
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('usuarios')->insert([
            'idrol' => '4',
            'nombre' => Str::random(10),
            'email'=> Str::random(10).'@piwichostudio.com',
            'password'=> Hash::make("123456"),
            'fecha_nacimiento'=> random_int ( 1985, 2001 ).'-06-13',
            'sexo'=> 'M',
            'apodo' => Str::random(7),
            'nacionalidad'=>'PE',
            'celular' => '967994927',
            'idioma'=>'ES',
            'estado'=> '1',
            'fecha_booster' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



    }
}
