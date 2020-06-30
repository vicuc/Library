<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bansao;
use App\Models\Phieumuon;
use App\Models\Phieutra;
use App\Models\Phieuphat;
use App\Models\ct_pieuphat;
use App\Models\ct_phieumuon;
use App\Models\ct_phieutra;

use Cart;
Use Illuminate\Support\Facades\Auth;
use Toastr;

use Carbon\Carbon;

class BillController extends Controller
{
    public function bill(Request $rq)
    {
        $cart = Cart::content();

        $phieumuon = new Phieumuon;
        $phieumuon->pm_status = 1; // đang mượn, khi nào 2 thì đã trả thành công
        $phieumuon->id_user = Auth::user()->id;
        $phieumuon->save();
        $phieumuon->pm_code = "PM-".$phieumuon->pm_id;
        $phieumuon->save();


        foreach($cart as $carts)
        {
            $bansao = new Bansao;
            $bansao->bs_name = $carts->options->code." - COPY";
            $bansao->bs_qty = $carts->qty;
            $bansao->id_sach = $carts->id;
            $bansao->save();
            $bansao->bs_code = "COPY-".$bansao->bs_id;
            $bansao->save();

            $ct_phieumuon = new ct_phieumuon;
            $ct_phieumuon->ngay_muon = $rq->ngaymuon; 
            $ct_phieumuon->ngay_tra = $rq->ngaytra; 

            $ct_phieumuon->id_phieumuon = $phieumuon->pm_id; 

            $ct_phieumuon->id_bansao = $bansao->bs_id; 

            $ct_phieumuon->save();

        }

        Cart::destroy();
        Toastr::success('Đăng ký mượn sách thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('taikhoan.phieumuon');

        

       
        






        
    }
}
