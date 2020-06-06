<?php

namespace App\Http\Middleware;

use App\Countries;
use Closure;

class SetLocale
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
        /*

       $countryShortcode = $request->route('country');
       $routeName = $request->route()->getName();
       $routeParameters = $request->route()->parameters();

       $country = Countries::where('sortname', '=', $countryShortcode)->where('status', '=', 1)->first();

       if ($country === null) {
           return redirect('/es');
       }

       $request->session()->put('country', $country);
       $request->session()->save();
       return $next($request);

        */

        if (!app()->getLocale()) {
            return redirect('/es');
        }else{
            app()->setLocale($request->segment(1));
        }

        

        return $next($request);

   }


}
