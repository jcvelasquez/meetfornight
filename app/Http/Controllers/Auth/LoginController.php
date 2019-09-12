<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('iniciar-sesion');
    }

    public function login(Request $request){

        $this->validateLogin($request);       
  

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'estado'=>1])){

            if( Auth::user()->idrol == 4) {
                return redirect()->route('perfil-profesional');
            }else{
                return redirect()->route('perfil-usuario');
            }

            
        }

        return back()->withErrors(['email' => trans('auth.failed')])->withInput(request(['email']));

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
        return redirect('/');
    }



/*

    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

*/

}
