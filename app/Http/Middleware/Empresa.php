<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class Empresa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('iniciar-sesion');
        }

        if (Auth::user()->idrol == 1) {
            return redirect()->route('dashboard');
        }

        if (Auth::user()->idrol == 2) {
            return $next($request);
        }
 
        if (Auth::user()->idrol == 3) {
            return redirect()->route('perfil-usuario');
        }
        
        if (Auth::user()->idrol == 4) {
            return redirect()->route('perfil-profesional');
        }

    }
}
