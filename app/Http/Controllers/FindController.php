<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sach;

class FindController extends Controller
{
    public function timkiem(Request $rq)
    {
        
        $tukhoa = $rq->tukhoa;

        $sach = Sach::where('s_name','like',"%$tukhoa%")->orwhere('s_desc','like',"%$tukhoa%")->orwhere('s_code','like',"%$tukhoa%")->get();
        $sanpham2 = Sach::where('s_name','like',"%$tukhoa%")->orwhere('s_desc','like',"%$tukhoa%")->orwhere('s_code','like',"%$tukhoa%")->count();

        $collection = collect([$sanpham2]);
        $banhbao = $collection->sum();

        return view('page.list_timkiem',['sach'=>$sach,'banhbao'=>$banhbao,'tukhoa'=>$tukhoa]);

    }
}
