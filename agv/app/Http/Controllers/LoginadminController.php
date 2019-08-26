<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginadminController extends Controller
{
    protected $redirectTo = '/homeandmin';
    protected $guard = 'admin';
    //
      //
    //
    /*use AuthenticatesUsers;
    protected $loginView ='auth.admin.login';*/

     public function __construct(){
        $this->middleware('admin');
   }

    public function showLoginForm()
	{
	    if (view()->exists('auth.authenticate')) {
	        return view('auth.authenticate');
	    }

	    return view('admin.auth.login');
	}

    public function index(){
    	return view('auth/admin.login');
    }

    public function login(){

        $credenciales = $this->validate(request(),[
            $this->username() =>'required|string',
            'password'=>'required|string'
        ]);

/*        dd(Auth::guard('admin')->user('Hola'));
*/
        /*if(Auth::guard('admin')->($credenciales)){

            return redirect()->route('homeandmin');
        }*/

       /* if(Auth::guard('admin')->($credenciales)){

        	return 'hola';
        }*/


        /*->withInput(request([$this->username()]));
*/    }

    public function logout(){
        Auth::logout();
        Auth::guard('guard_name')->user()->logout();

        /*return redirect('');*/
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





    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');//solo acceder a login si somos invitados no autenticados
    }*/
}
