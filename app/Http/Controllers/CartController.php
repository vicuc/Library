<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
Use Illuminate\Support\Facades\Auth;
use App\Models\Sach;

use Toastr;

use Carbon\Carbon;



class CartController extends Controller
{

  public function cart(){

    $data['cart'] = Cart::content();
    // dd($data);
    return view('page.cart',$data);
  }



    public function addCart($id)
    {
    	// dd($id);
        $sach = Sach::find($id);
        if(Auth::check())
        {
            Cart::add(['id' => $id,
                'name' => $sach->s_name,
                'qty' => 1,
                'price' => 0,
                'weight' => 0,
                'options' => ['img' => $sach->s_image,
                            'tacgia' => $sach->tacgia->tg_name,
                            'code' => $sach->s_name

                            ]]);

            Toastr::info('Đã thêm sách vào giỏ sách', 'Thông báo', ["positionClass" => "toast-top-right","progressBar"=> true]);
            return redirect()->back();
        
        }
        else
        {
            Toastr::error('Bạn chưa đăng nhập', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();

        }

    	// $data = Cart::content();
    	// dd($data);
   	}

    public function update(Request $request){
      $qty = $request->qty;
      $rowId = $request->rowId;
      // update cart
      Cart::update($rowId,$qty);
      Toastr::info('Cập nhật giỏ sách thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);


    }


   	public function delCart($id)
    {
    	if($id == 'all')
    	{
    		Cart::destroy();
            Toastr::warning('Bạn đã xóa hết sách', 'Thông báo', ["positionClass" => "toast-top-right"]);

    	}
    	else
    	{
    		Cart::remove($id);
            Toastr::warning('Bạn đã xóa 1 sách', 'Thông báo', ["positionClass" => "toast-top-right"]);

    	}
    	return back();
   	}

    public function checkout()
    {
        $cart = Cart::content();
        $ngaymuon = Carbon::now();
        $now =  Carbon::now();
        $ngaytra = $now->addDays(7); 
        // dd($data['hethan']);
        return view('page.checkout',compact('cart','ngaymuon', 'ngaytra'));
        

        
    }
}
