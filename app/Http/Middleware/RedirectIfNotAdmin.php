<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotAdmin
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

         if (Auth::check() && Auth::user()->roll=='Adminstracion') {


            return $next($request);
         }

         
         return back()->withErrors([$this->username() =>'<center class="alert alert-danger">No eres administrador</center>']);
    }

    public function username(){
        return 'name';
    }
}
/*class RedirectIfNotAdmin
{*/
/**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Closure  $next
 * @param  string|null  $guard
 * @return mixed
 */
/*public function handle($request, Closure $next, $guard = 'admin')
{
    if (!Auth::guard($guard)->check()) {
        return redirect('/');
    }

    return $next($request);
}*/