<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SachRequest;
use App\Models\Sach;
use App\Models\Chude;
use App\Models\Tacgia;
use App\Models\Nxb;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ChudeController;


class SachController extends Controller
{
    public function get_sach()
    {
        $data['slist'] = DB::table('sach')->join('chude','sach.s_cd','=','chude.cd_id')->orderBy('s_id')->get();
        return view('backend.sach.sach',$data);
    }
    public function addsach()
    {   
        $data['cdlist'] = Chude::all();
        $data['tacgia'] = Tacgia::all();
        $data['nxb'] = NXB::all();
        
        return view('backend.sach.addsach',$data);
    }
    public function postsach(SachRequest $request)
    {
        $sach = new Sach;
        $sach->s_name = $request->name;
        $sach->s_desc = $request->mota;
        $sach->s_cd = $request->cde;
        $sach->s_nxb = $request->nxb;
        $sach->s_tacgia = $request->tacgia;

        $sach->s_status = 1;


        // hinh anh
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            // kiểm tra  size
            $size = $file->getsize();
            if($size > 1024*1024)
            {
                return  redirect()->back()->with('size','size quá lớn chọn lại');
            }
            //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
            $duoi_file = $file->getClientOriginalExtension();
            //tạo 1 mang arr để sử dụng in_array so sanh
            $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];
            if(!in_array($duoi_file, $arr_duoifile))
            {
                return  redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
            }
            // radom tên hinh ảnh, để lấy ra không bị trùng
            //,... getClientOriginalName() lấy ra tên
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(5)."_".$name;
            while(file_exists('public/admin/upload/sach/'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move('public/admin/upload/sach/',$hinh_anh);
            $sach->s_image = $hinh_anh;
        }
        else
        {
            $sach->s_image = "";
        }

        // echo $sach;die;
        $sach->save();
        $sach->s_code= "BOOK-000".$sach->s_id;
        $sach->save();
        
        return redirect()->route('list.sach');
    }
    public function edit_sach($id)
    {
        $data['s'] = Sach::find($id);
        $data['chude'] = Chude::all();
        $data['nhaxb'] = Nxb::all();
        $data['tacgia'] = Tacgia::all();

        return view('backend.sach.editsach',$data);
    }
    public function post_edit(Request $request,$id)
    {
        $sach = Sach::find($id);
        $sach->s_name = $request->name;
        $sach->s_desc = $request->mota;

        $sach->s_cd = $request->cde;
        $sach->s_nxb = $request->nxb;
        $sach->s_tacgia = $request->tacgia;

        $sach->s_status = 1;


        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            // kiểm tra  size
            $size = $file->getsize();
            if($size > 1024*1024)
            {
                return redirect()->back()->with('size','size quá lớn chọn lại');
            }
            //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
            $duoi_file = $file->getClientOriginalExtension();
            //tạo 1 mang arr để sử dụng in_array so sanh
            $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];
            if(!in_array($duoi_file, $arr_duoifile))
            {
                return  redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
            }
            // radom tên hinh ảnh, để lấy ra không bị trùng
            //,... getClientOriginalName() lấy ra tên
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(5)."_".$name;
            while(file_exists('public/admin/upload/sach/'.$hinh_anh))
            {
                    $hinh_anh = str_random(4)."_".$name;
            }
            $file->move('public/admin/upload/sach/',$hinh_anh);

            if($sach->hinh_anh){
                unlink('public/admin/upload/sach/'.$sach->s_image);
                $sach->hinh_anh = $hinh_anh;
            }
            else
            {   
                $sach->s_image = $hinh_anh;
            }

            $sach->s_image = $hinh_anh;
            
        }
        $sach->save();  
        return redirect()->route('list.sach');
    }



    // xoa
    public function delete_sach($id)
    {
        // echo "đã xóa";die;
        $sach2 = Sach::find($id); // phải gắn find trước nếu gắn destroy trước thì nó xóa trước ko thể find dc
        $sach = Sach::destroy($id);
        if($sach2->s_image){
            unlink('public/admin/upload/sach/'.$sach2->s_image);
        }
        return redirect()->bacK()->with('thongbaoxoa','Bạn đã xóa thành công...!');
    }
}
