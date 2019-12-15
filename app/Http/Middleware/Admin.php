<?php

namespace App\Http\Middleware;

use Closure;
//dùng class Auth gọi kiểm tra điều kiện middleware
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
        //kiểm tra là admin
        if(Auth::check() && Auth::user()->role == 1){
            return $next($request);//$next cho qua mà không chặn điều kiện
        }
        //kiểm tra customer
        elseif(Auth::check() && Auth::user()->role == 0){
            return redirect()->route('customer');
        }
        //kiểm tra chưa đăng nhập
        else{
            return redirect()->route('login');
        }
    }
}
