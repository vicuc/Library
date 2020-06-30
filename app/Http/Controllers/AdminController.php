<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
Use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function home()
    {   
        $user = User::all()->count();
        return view('admin.layout');
    }
    
    public function get_login()
    {
        if(!Auth::check())
        {
            return view('admin.login.dangnhap');
        }
        else
        {
            if(Auth::user()->level == 2)
            {
                return redirect()->back();
            }
        }
    }

    public function post_login(Request $lg)
    {
        if(Auth::attempt(['email'=>$lg->email,'password'=>$lg->password]))
        {    
            if(Auth::user()->trang_thai == 1)
            {
                return redirect(''.Route('dashboard').'');
            }   
        }
        else
        {
            return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu chưa đúng');
        }
    }

    //
    public function logout()
    {
        // da logout rui ba~ chuyen huong toi logout nua chi vay thim -_-

        // return redirect()->route('admin.get.log');

        //Vi có thê lam 2 logout chung 1 controller nhu nay
        if(Auth::user()->level == 1)
        {   
            Auth::logout(); // vi nay đê logout o ngoai no se ko hieu no chạy truoc nên ko dang xuat no ko hieu Auth
            return redirect()->route('page.home'); // neu la admin thi chuyen ve dang nhap admin
        }
        elseif(!Auth::check())
        {
            Auth::logout();
            return redirect()->back(); // nguoc lai a'
        }
        elseif(Auth::user()->level == 2)
        {
            Auth::logout();
            return redirect()->route('page.home'); // nguoc lai a'

        }
        
    }


        //public function dangxuat()
    //{
          //Auth::logout();
          //return redirect()->route('out');
    //}

    public function dashboard()
    {
        return view('backend.index');
    }
}
