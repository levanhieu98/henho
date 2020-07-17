<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class checkstatus
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
       $response = $next($request);
        //If the status is not approved redirect to login 
        if(Auth::check() && Auth::user()->status ==1){
            Auth::logout();
            return redirect('/')->with('erro_login', 'Tài khoản của bạn đã bị khóa !!!');
        }
        return $response;
    }
}
