<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 
//use Illuminate\Support\Facades\Auth;

class Usuario
{

    public function handle($request, Closure $next)
    {

        if (!Auth::check()) {
            return redirect()->route('iniciar-sesion', app()->getLocale());
        }

        if (Auth::user()->idrol == 1) {
            return redirect()->route('admin/dashboard', app()->getLocale());
        }

        if (Auth::user()->idrol == 2) {
            return redirect()->route('perfil-empresa', app()->getLocale());
        }
 
        if (Auth::user()->idrol == 3) {
            return $next($request);
        }
        
        if (Auth::user()->idrol == 4) {
            return redirect()->route('perfil-profesional', app()->getLocale());
        }
        
    }
}
