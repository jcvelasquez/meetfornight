<?php

use Illuminate\Database\Seeder;

class CodigosPromocionalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('codigos_promocional')->insert([
            'codigo_promocional' => 'ABCDEF123',
            'descripcion_codigo' => 'Descuento para los nuevos registrados',
            'tipo_descuento'=> 'PORCENTAJE',
            'valor_codigo'=> '10'
        ]);

        DB::table('codigos_promocional')->insert([
            'codigo_promocional' => 'AWSD456',
            'descripcion_codigo' => 'Descuento para los usuarios profesionales',
            'tipo_descuento'=> 'MONTO',
            'valor_codigo'=> '20'
        ]);




    }
}
