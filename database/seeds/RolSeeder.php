<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{

    
    public function run()
    {
        //
        $role = new Rol();
        $role->nombre_rol = 'admin';
        $role->descripcion_rol = 'Rol de Administrador';
        $role->save();

        $role = new Rol();
        $role->nombre_rol = 'empresa';
        $role->descripcion_rol = 'Rol de Empresa';
        $role->save();

        $role = new Rol();
        $role->nombre_rol = 'usuario';
        $role->descripcion_rol = 'Rol de Usuario';
        $role->save();

        $role = new Rol();
        $role->nombre_rol = 'profesional';
        $role->descripcion_rol = 'Rol de Profesional';
        $role->save();

    }
}
