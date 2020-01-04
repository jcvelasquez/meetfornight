<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
//use Auth;

class RedirectIfAuthenticated
{

    
    public function handle($request, Closure $next, $guard = null)
    {

        /*if (!Auth::check()) {
            return redirect()->route('iniciar-sesion');
        }*/

        if (Auth::guard($guard)->check()) {

            if (Auth::user()->idrol == 1) {
                return redirect()->route('dasboard');
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

        return $next($request);

    }
}
