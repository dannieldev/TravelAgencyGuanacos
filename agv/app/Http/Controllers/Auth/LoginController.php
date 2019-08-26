<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function showLoginFrom(){
        return view('auth.login');
    }

    public function login(){

        $credenciales = $this->validate(request(),[
            $this->username() =>'required|string',
            'password'=>'required|string'
        ]);

        if(Auth::attempt($credenciales)){

            return redirect()->route('home');
        }

        return back()->withErrors([$this->username() =>'Esta credenciales no concuerdan con nuestros registros']);
                     /*->withInput(request([$this->username()]));
*/    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
    public function username(){
        return 'name';
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');//solo acceder a login si somos invitados no autenticados
    }
}
