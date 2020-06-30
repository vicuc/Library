<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tacgia;

class TacgiaController extends Controller
{
    public function get_tacgia()
    {
        $data['tacgialist'] = Tacgia::all();
    
        return view('backend.tacgia.tacgia',$data);
    }
    public function post_tacgia(Request $request)
    {
        $nxb = new Tacgia;
        $nxb->tg_name = $request->name;
      
        $nxb->save();
        return redirect()->back();

    }
    public function edit_tacgia($id)
    {
        $data['cd'] = Tacgia::find($id);
        return view('backend.tacgia.edit_tacgia',$data);
    }
    public function post_edit(Request $request,$id)
    {
        $nxb = Tacgia::find($id);
        $nxb->tg_name = $request->name;
        $nxb->tg_born = $request->date;

        $nxb->save();
        return redirect()->route('list.tacgia');
    }
    public function delete_tacgia($id)
    {
        // echo "đã xóa";die;
        $sach = Tacgia::destroy($id);
        return redirect()->bacK()->with('thongbaoxoa','Bạn đã xóa thành công...!'); 

    }
}
