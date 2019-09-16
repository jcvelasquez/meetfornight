<?php

namespace App\Http\Middleware;


use Closure;
//use App\Usuario;

class Usuario
{

    public function handle($request, Closure $next)
    {

        /*if (! $request->Usuario()->hasRole('Usuario')) {
            return redirect('/');
        }*/

        return $next($request);
    }
}
