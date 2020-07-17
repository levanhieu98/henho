<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class check_admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if(Auth::check()&&Auth::user()->role==1)
        {
           return redirect()->route('home');
       }
       if(Auth::check()==false)
       {
        return redirect()->route('giaodien');
       }
       return $next($request);
   }
}
