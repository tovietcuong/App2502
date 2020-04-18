<?php

namespace App\Http\Middleware;

use Closure;

class loginGiaoVien
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
        if($request->session()->has('tk_giaovien'))
        {
            return $next($request);
        }  
        else
        {
           return redirect()->route('login');   
        }    
    }
}
