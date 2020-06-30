<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;// phải khai bảo mới hiểu được thư viên Auth


class Login_admin
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
            if($user->level == 1 )
            {
                return $next($request);

            }
            elseif($user->level == 2 )
            {
                 // echo "banhbao";die;
                // neu khong phai admin no thi chuyen huong logout de no ko luu Authh:check
                return redirect()->back();
            }   
            
        }       
        else
        {
            // echo "banhbao2";die;

            return redirect()->back()->with('thongbao','Tài khoản và mật khẩu không chính xác');

        }
                
            
    }
}
