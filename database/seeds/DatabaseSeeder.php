<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RolSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(UsuariosExtrasSeeder::class);
        $this->call(TarifaProfesionalSeeder::class);
        $this->call(AlertaProfesionalSeeder::class);
        $this->call(ServiciosProfesionalSeeder::class);
        $this->call(ServiciosXProfesionalSeeder::class);
        $this->call(DisponibilidadProfesionalSeeder::class);
        $this->call(ReservasProfesionalSeeder::class);
        
    }
}
