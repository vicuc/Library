<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bansao;
use App\Models\Phieumuon;
use App\Models\Phieutra;
use App\Models\Phieuphat;
use App\Models\ct_phieuphat;
use App\Models\ct_phieumuon;
use App\Models\ct_phieutra;
use App\User;
use Cart;
Use Illuminate\Support\Facades\Auth;
use Toastr;

use Carbon\Carbon;

class TaikhoanController extends Controller
{

    public function myaccount(){

        return view('page.tai-khoan.myaccount');
    }


    public function phieumuon(){

        $phieumuon = Phieumuon::where('id_user','=',Auth::user()->id)->get();
        return view('page.tai-khoan.phieumuon',compact('phieumuon'));
    }

    public function ct_phieumuon($id){

        $ct_phieumuon = ct_phieumuon::where('id_phieumuon','=',$id)->get();
        return view('page.tai-khoan.ct_phieumuon',compact('ct_phieumuon'));
    }

    public function phieutra(){

        $phieutra = Phieutra::where('id_user','=',Auth::user()->id)->get();
        return view('page.tai-khoan.phieutra',compact('phieutra'));
    }

    public function ct_phieutra($id){

        $ct_phieutra = ct_phieutra::where('id_phieutra','=',$id)->get();
        return view('page.tai-khoan.ct_phieutra',compact('ct_phieutra'));
    }

    

    public function phieuphat(){

        $phieuphat = Phieuphat::where('id_user','=',Auth::user()->id)->get();
        return view('page.tai-khoan.phieuphat',compact('phieuphat'));
    }

    public function ct_phieuphat($id){

        $ct_phieuphat = ct_phieuphat::where('id_phieuphat','=',$id)->get();
        return view('page.tai-khoan.ct_phieuphat',compact('ct_phieuphat'));
    }

    // /////////////////////////////

    public function update(Request $rq){

        $user = User::find(Auth::user()->id);
        $user->ten_user = $rq->hoten;
        $user->gioi_tinh = $rq->gioitinh;
        $user->phone = $rq->phone;

        $user->save();


        Toastr::success('Cập nhật tài khoản thành công !', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    // ///////////////////////////////////////////////////////////
    public function get_trasach($id)
    {
        $phieumuon = Phieumuon::find($id);
        foreach($phieumuon->ctphieumuon2 as $pm)
        {
            $ngaymuon = $pm->ngay_muon;
        }

        $homnay = Carbon::now();
        $abc = $homnay->diffInDays($ngaymuon);
        // 

        if($abc <= 7)
        {
            // echo "hello 1";die;
            $trasach = new Phieutra;
            $trasach->pt_status = 1;
            $trasach->id_user = $phieumuon->id_user;
            $trasach->save();
            $trasach->pt_code =  "PT-".$trasach->pt_id;
            $trasach->save();
            // 
            $ctphieutra = new ct_phieutra;
            $ctphieutra->ngay_tra = Carbon::now();
            $ctphieutra->id_phieumuon = $id;
            $ctphieutra->id_phieutra = $trasach->pt_id;
            $ctphieutra->save();
            // 
            $data = Phieumuon::where('pm_id',$id)->update(['pm_status'=>2]);
            Toastr::success('Bạn trả đúng hẹn', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->route('taikhoan.phieutra');
        }
        elseif($abc > 7)
        {
            // echo "hello 2";die;
            $trasach = new Phieutra;
            $trasach->pt_status = 2; // trả trể
            $trasach->id_user = $phieumuon->id_user;
            $trasach->save();
            $trasach->pt_code =  "PT-".$trasach->pt_id;
            $trasach->save();
            // 
            $ctphieutra = new ct_phieutra;
            $ctphieutra->ngay_tra = Carbon::now();
            $ctphieutra->id_phieumuon = $id;
            $ctphieutra->id_phieutra = $trasach->pt_id;
            $ctphieutra->save();
            // 
            $phieuphat = new Phieuphat;
            $phieuphat->pp_name = "Phiếu phạt - ".$id;
            $phieuphat->id_user = $phieumuon->id_user;
            $phieuphat->pp_status = 1;
            $phieuphat->save();
            $phieuphat->pp_code =  "PP-".$phieuphat->pp_id;
            $phieuphat->save();

            $ctphieutra = new ct_phieuphat;
            $ctphieutra->li_do = "Nộp trễ ".$abc." ngày";
            $ctphieutra->muc_phat = $abc * 5000;

            $ctphieutra->id_phieuphat = $phieuphat->pp_id;
            $ctphieutra->save();
            // 
            $data = Phieumuon::where('pm_id',$id)->update(['pm_status'=>2]);
            Toastr::warning('Bạn trả trễ, bị phạt !', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->route('taikhoan.phieutra');


        }
        
    }

}
