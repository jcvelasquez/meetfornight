<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
//use Illuminate\Support\Facades\Auth;

class Admin
{

    
    public function handle($request, Closure $next)
    {

        if (!Auth::check()) {
            return redirect()->route('iniciar-sesion');
        }

        if (Auth::user()->idrol == 1) {
            return $next($request);
        }

        if (Auth::user()->idrol == 2) {
            return redirect()->route('perfil-empresa');
        }
 
        if (Auth::user()->idrol == 3) {
            return redirect()->route('perfil-usuario');
        }
        
        if (Auth::user()->idrol == 4) {
            return redirect()->route('perfil-profesional');
        }

        
    }
}
