<?php

use App\Categorias;
use Illuminate\Database\Seeder;


class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        $categoria = new Categorias();
        $categoria->nombre_categoria = 'MUJERES';
        $categoria->icono_categoria = 'icon-c-mujer';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'GIGOLOS';
        $categoria->icono_categoria = 'icon-c-gigolo';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'GAYS';
        $categoria->icono_categoria = 'icon-c-homo';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'TRANS';
        $categoria->icono_categoria = 'icon-c-trans';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'TRAVESTIS';
        $categoria->icono_categoria = 'icon-c-trans';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'FETICHES';
        $categoria->icono_categoria = 'icon-c-fetiche';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'MASAJES';
        $categoria->icono_categoria = 'icon-c-masaje';
        $categoria->estado_categoria = 1;
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombre_categoria = 'PAREJAS';
        $categoria->icono_categoria = 'icon-c-parejas';
        $categoria->estado_categoria = 1;
        $categoria->save();

    }
}
