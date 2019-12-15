<?php

namespace App\Http\Middleware;

use Closure;
//dùng class Auth gọi kiểm tra điều kiện middleware
use Auth;
class Customer
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
        //kiểm tra là admin
        if(Auth::check() && Auth::user()->role == 1){
            return redirect()->route('admin');
        }
        //kiểm tra customer
        elseif(Auth::check() && Auth::user()->role == 0){
            return $next($request);
        }
        //kiểm tra chưa đăng nhập
        else{
            return redirect()->route('login');
        }
    }
}
