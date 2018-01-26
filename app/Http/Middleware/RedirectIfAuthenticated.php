<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::user()){

            $user = Auth::user();
            if($user->id_roll==1)
            {
                return redirect ("/admin");
            } 
            if($user->id_roll==2)
            {
                return redirect ("/admin");
            } 
            if($user->id_roll==3)
            {
                return redirect ("/home");
            } 
            
        } 

        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
