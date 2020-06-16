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
                return redirect()->route('admin/dashboard', app()->getLocale() );
            }
    
            if (Auth::user()->idrol == 2) {
                return redirect()->route('perfil-empresa', app()->getLocale());
            }
     
            if (Auth::user()->idrol == 3) {
                return redirect()->route('perfil-usuario', app()->getLocale());
            }
            
            if (Auth::user()->idrol == 4) {
                return redirect()->route('perfil-profesional', app()->getLocale());
            }

        }

        return $next($request);

    }
}
