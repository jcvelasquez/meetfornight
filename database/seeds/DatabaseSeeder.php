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
        // $this->call(UsersTableSeeder::class);

        $this->call(RolSeeder::class);

        //$this->call(PerfilUsuarioSeeder::class);

        //$this->call(PerfilProfesionalSeeder::class);

        $this->call(UsuariosSeeder::class);

        $this->call(UsuariosExtrasSeeder::class);
        
    }
}
