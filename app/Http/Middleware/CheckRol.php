<?php

namespace App\Http\Middleware;

use Closure;
use App\Usuario;

class CheckRol
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


       if ($request->Usuario()->hasRole('Usuario')) {
           return redirect('/perfil-usuario');
           //abort(403, "No tienes autorización para ingresar.");

        }else if ($request->Usuario()->hasRole('Profesional')) {
            return redirect('/perfil-profesional');
            //abort(403, "No tienes autorización para ingresar.");
         }

        return $next($request);
    }
}
