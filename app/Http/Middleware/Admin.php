<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        // Neu la admin
        if(Auth::check() && Auth::user()->role == 1)
        {
            //Tiep tuc truy cap
            return $next($request);
        }
        // Neu la customer
        elseif (Auth::check() && Auth::user()->role == 0)
        {
            //Chuyen toi trang customer
            return redirect()->route('customer');
        }
        else {
            // Chuyen toi dang nhap
            return redirect()->route('login');
        }
    }
}
