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
        $this->call(CreditosProfesionalSeeder::class);
        $this->call(CodigosPromocionalesSeeder::class);
        $this->call(CategoriasSeeder::class);      
        $this->call(CategoriasProfesionalSeeder::class);  
        $this->call(FotoProfesionalSeeder::class);  
        $this->call(FrecuenciaBoosterSeeder::class);    
        $this->call(IdiomasSeeder::class);    
        $this->call(PlanesSeeder::class);     
        $this->call(CriteriosValoracionSeeder::class);     
        $this->call(ValoracionProfesionalSeeder::class);     
           

        
     
        
    }
}
