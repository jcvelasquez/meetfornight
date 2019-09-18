<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;
//use App\Usuario;

class Usuario
{

    public function handle($request, Closure $next)
    {

        if (Auth::user()->idrol == 3) {

            return $next($request);

        }else if (Auth::user()->idrol == 4) {

            return redirect('perfil-profesional');
            
        }


        
    }
}
