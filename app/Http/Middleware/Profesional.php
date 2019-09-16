<?php

namespace App\Http\Middleware;

use Closure;

class Profesional
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
        
        if ($request->idrol == 4) {
            return redirect('/perfil-profesional');
        }

        return $next($request);
    }
}
