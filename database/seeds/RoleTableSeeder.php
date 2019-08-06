<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->nombre_rol = 'admin';
        $role->descripcion_rol = 'Rol de Administrador';
        $role->save();

        $role = new Role();
        $role->nombre_rol = 'empresa';
        $role->descripcion_rol = 'Rol de Empresa';
        $role->save();

        $role = new Role();
        $role->nombre_rol = 'usuario';
        $role->descripcion_rol = 'Rol de Usuario';
        $role->save();

        $role = new Role();
        $role->nombre_rol = 'profesional';
        $role->descripcion_rol = 'Rol de Profesional';
        $role->save();

    }
}
