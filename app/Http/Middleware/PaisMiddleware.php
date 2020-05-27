<?php

namespace App\Http\Middleware;

use App\Countries;
use Closure;

class PaisMiddleware
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

        

       $countryShortcode = $request->route('country');
       $routeName = $request->route()->getName();
       $routeParameters = $request->route()->parameters();

       /*
       if ($request->session()->has('redirect_to_country')) {

           $redirectTo = $request->session()->get('redirect_to_country');

           if ($country === $redirectTo) {
               $request->session()->forget('redirect_to_country');
           } else {
               $routeParameters['country'] = $redirectTo;
               return redirect()->route($routeName, $routeParameters);
           }
           
       }*/



       $country = Countries::where('sortname', '=', $countryShortcode)->where('status', '=', 1)->first();

       if ($country === null) {
           return redirect('/es');
       }

       $request->session()->put('country', $country);
       $request->session()->save();
       return $next($request);
   }


}
