<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class checkrole_admin
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
       if(Auth::user()&&Auth::user()->email=='lehieu1142@gmail.com'||Auth::user()&&Auth::user()->email=='snowwind15@yahoo.com.vn')
      {
        
         return $next($request);
     }
    else
    {
        return redirect('/admin/home');  
    }
    }
}
