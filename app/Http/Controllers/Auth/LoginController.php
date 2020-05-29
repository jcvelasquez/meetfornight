<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
//use Auth;

class LoginController extends Controller
{

    protected $redirectTo;

    //use AuthenticatesUsers;

    public function showLoginForm(){
        return view('iniciar-sesion');
    }

    public function login(Request $request){

        $this->validateLogin($request);       
  
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'estado'=>1])){

      
            switch(Auth::user()->idrol){
                
                case 1: return redirect()->route('dashboard', app()->getLocale());
                        break;

                case 2: return redirect()->route('perfil-empresa', app()->getLocale());
                        break;

                case 3: if(isset($request->toredirect)){
                            return redirect($request->toredirect);
                        }else{
                            return redirect()->route('perfil-usuario', app()->getLocale());
                        }
                        break;

                case 4: return redirect()->route('perfil-profesional', app()->getLocale());
                        break;

                default: return redirect()->route('iniciar-sesion', app()->getLocale());

            }
                
            
        }

        return back()->withErrors(['email' => trans('auth.failed')])->withInput(request(['email']));

    }

    public function redirectTo()
    {
        return app()->getLocale() . '/home';
    }

    protected function validateLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('home', app()->getLocale());
    }



}
