<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Chude;
use App\Http\Requests\ChudeRequest;
use App\Http\Requests\EditChudeRequest;

class ChudeController extends Controller
{
    public function get_chude()
    {
        $data['chudelist'] = Chude::all();
    
        return view('backend.chude.chude',$data);
    }
    public function post_chude(ChudeRequest $request)
    {
        $chude = new Chude;
        $chude->cd_name = $request->name;
        $chude->save();
        return back();

    }
    public function edit_chude($id)
    {
        $data['cd'] = Chude::find($id);
        return view('backend.chude.edit_chude',$data);
    }
    public function post_edit(EditChudeRequest $request,$id)
    {
        $chude = Chude::find($id);
        $chude->cd_name = $request->name;
        $chude->save();
        return redirect()->route('list.chude');
    }
    public function delete_chude($id)
    {
        $sach = Chude::destroy($id);
        return redirect()->bacK()->with('thongbaoxoa','Bạn đã xóa thành công...!');

    }
}
