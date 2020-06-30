<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sach;

use Carbon\Carbon;
use Toastr;

class Pagecontroller extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    //login va dang ky
    public function login()
    {
        return view('page.login');
    }

    public function list()
    {   
        $sach = Sach::where('s_status','=',1)->paginate(6);
        return view('page.list',compact('sach'));
    }

    public function list_chude($id)
    {   
        $sach = Sach::where('s_cd','=',$id)->where('s_status','=',1)->paginate(6);
        return view('page.list_chude',compact('sach')); 
    }

    public function list_tacgia($id)
    {   
        $sach = Sach::where('s_tacgia','=',$id)->where('s_status','=',1)->paginate(6);
        return view('page.list_tacgia',compact('sach')); 
    }

    public function list_nxb($id)
    {   
        $sach = Sach::where('s_nxb','=',$id)->where('s_status','=',1)->paginate(6);
        return view('page.list_nxb',compact('sach')); 
    }

    public function single($id)
    {   
        $sach = Sach::find($id);
        $idchude = $sach->s_cd;
        $bb = Sach::where('s_cd','=',$idchude)->take(3)->orderBy('s_id','desc')->get();

        // dd($bb);

        // luot xem 
        views($sach)
            ->cooldown(Carbon::now()->addMinutes(1))
            ->record();
        
        $data = Sach::where('s_id',$id)->update(['views'=>views($sach)->count()]);

        return view('page.single',compact('bb','sach'));
    }

    public function get_login()
    {
        return view('page.login.dangnhap');
    }
}
