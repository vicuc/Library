<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nxb;

class NXBController extends Controller
{
    public function get_nxb()
    {
        $data['nxblist'] = Nxb::all();
    
        return view('backend.nxb.nxb',$data);
    }
    public function post_nxb(Request $request)
    {
        $nxb = new Nxb;
        $nxb->nxb_name = $request->name;
        $nxb->save();
        return redirect()->back();

    }
    public function edit_nxb($id)
    {
        $data['cd'] = Nxb::find($id);
        return view('backend.nxb.edit_nxb',$data);
    }
    public function post_edit(Request $request,$id)
    {
        $nxb = Nxb::find($id);
        $nxb->nxb_name = $request->name;
        $nxb->save();
        return redirect()->route('list.nxb');
    }
    public function delete_nxb($id)
    {
        // echo "đã xóa";die;
        $sach = Nxb::destroy($id);
        return redirect()->bacK()->with('thongbaoxoa','Bạn đã xóa thành công...!'); 

    }
}
