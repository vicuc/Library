<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;// phải khai bảo mới hiểu được thư viên Auth

class TaikhoanMiddleware
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
        if(Auth::check())
        {
            $user = Auth::user();
            if($user->level == 2 )
            {
                return $next($request);

            }
            
        }       
        else
        {
            // echo "banhbao2";die;

            return redirect()->route('page.home');

        }
    }
}
