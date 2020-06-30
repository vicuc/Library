<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Toastr;

Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function post_reg(Request $reg)
    {
        $this->validate($reg,[
            'hoten' =>'min:2|max:15',
            'email' => 'email|max:32|unique:tai_khoan,email',
            'password' => 'min:3|max:50',
            'phone' => 'min:1|max:10',

            'confirmpassword' => 'same:password',
            
        ],[
            'phone.min' => 'Số điện thoại chưa đúng !',
            'phone.max' => 'Số điện thoại tối đa 10 só !',

            'hoten.min' => 'Tên tối thiếu 2 ký tự !',
            'hoten.max' => 'Tên tối đa 15 ký tự !',

            'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
            'email.max' => 'Email không được vượt hơn 32 ký tự !',
            'email.unique' => 'Email đã tồn tại !',

            'password.min' => 'Mật khẩu phải có it nhât 6 ký tự !',
            'confirmpassword.same' => 'Nhập lại mật khẩu không trùng khớp !'
        ]);

        $account = new User;
        $account->email = $reg->email;
        $account->ten_user = $reg->name;

        $account->phone = $reg->phone;


        $account->password = bcrypt($reg->password);
        $account->level = '2';
        $account->trang_thai = '1';
        $account->gioi_tinh =  $reg->gioitinh;

        // echo $account; die;
        $account->save();
        $account->ma_user = "Member-000".$account->id;
        $account->save();

        Toastr::success('Đăng ký thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect(''.route('page.login').'')->with('reg','Chúc mừng bạn đã đăng ký thành công');
    }

    public function post_lg(Request $lg)
    {
        $email =  $lg->email;
        $password = $lg->password;
     
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
            if(Auth::user()->trang_thai == 1)
            {
                    Toastr::success('Hi '.Auth::user()->ten_user.'', 'Welcome', ["positionClass" => "toast-top-right"]);

                    // echo "Thanh Cong";die;
                    return redirect()->route('page.home');
            }
            else
            {
                echo "tai khoan bi khoa";die;

                return redirect()->back()->with('disable','Tài khoản bạn đã bị khóa !');
            }
        else
            Toastr::error('Mật khẩu không đúng vui lòng thử lại !', 'Thông báo', ["positionClass" => "toast-top-right"]);

            return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại');
    }

    
}
