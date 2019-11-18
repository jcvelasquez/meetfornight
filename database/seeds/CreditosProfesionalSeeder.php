<?php

use Illuminate\Database\Seeder;

class CreditosProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('creditos_profesional')->insert([
            'idprofesional' => 34,
            'metodo_pago' => 'PAYPAL',
            'cantidad_creditos' => 40,
            'monto_creditos'=> '180.20',
            'total_creditos'=> '180.20'
        ]);

        DB::table('creditos_profesional')->insert([
            'idprofesional' => 34,
            'metodo_pago' => 'STRIPE',
            'cantidad_creditos' => 15,
            'monto_creditos'=> '150.40',
            'total_creditos'=> '150.40'
        ]);


        DB::table('creditos_profesional')->insert([
            'idprofesional' => 34,
            'metodo_pago' => 'TRANSFERENCIA',
            'cantidad_creditos' => 10,
            'monto_creditos'=> '100.00',
            'total_creditos'=> '100.00'
        ]);

       


    }
}
