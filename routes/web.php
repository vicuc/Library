<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Carbon\Carbon;
use App\Http\Comtroller\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//Login Admin
Route::get('/admin@@','AdminController@get_login')->name('admin.get.log');
Route::post('/admin@@','AdminController@post_login')->name('admin.post.log');
Route::get('/logout','AdminController@logout')->name('out');


//Login Page
//Route::get('/dang-nhap','Pagecontroller@get_login')->name('member.get.log');
//Route::post('/dang-nhap','Pagecontroller@post_login')->name('member.post.log');


//dangxuat
//Route::get('/dang-xuat','AdminController@dangxuat')->name('logout');


//Home
// middleware la lang nghe
// => "...." la ten kennel khai bao ra

Route::group(['prefix'=>'admin','middleware'=>'Login_admin2'],function(){
    Route::get('/','AdminController@home')->name('ad');   

    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
	//Chude
	Route::get('/chude','ChudeController@get_chude')->name('list.chude');
	Route::post('add-chude','ChudeController@post_chude')->name('add.post.chude');
	Route::get('/edit-chude/{id}','ChudeController@edit_chude')->name('edit.get.chude');
	Route::post('/edit-chude/{id}','ChudeController@post_edit')->name('edit.post.chude');
	Route::get('/delete-chude/{id}','ChudeController@delete_chude')->name('delete.chude');
	 //Sach
	Route::get('/sach','SachController@get_sach')->name('list.sach');
	Route::get('/add-sach','SachController@addsach')->name('get.sach');
	Route::post('/add-sach','SachController@postsach')->name('post.sach');
	Route::get('/edit-sach/{id}','SachController@edit_sach')->name('edit.get.sach');
	Route::post('/edit-sach/{id}','SachController@post_edit')->name('edit.post.sach');
	Route::get('/delete-sach/{id}','SachController@delete_sach')->name('delete_sach');
	//NXB
	Route::get('/nxb','NXBController@get_nxb')->name('list.nxb');
	Route::post('add-nxb','NXBController@post_nxb')->name('add.post.nxb');
	Route::get('/edit-nxb/{id}','NXBController@edit_nxb')->name('edit.get.nxb');
	Route::post('/edit-nxb/{id}','NXBController@post_edit')->name('edit.post.nxb');
	Route::get('/delete-nxb/{id}','NXBController@delete_nxb')->name('delete.nxb');

	// Tac gia
	Route::get('/tacgia','TacgiaController@get_tacgia')->name('list.tacgia');
	Route::post('/add-tacgia','TacgiaController@post_tacgia')->name('add.post.tacgia');
	Route::get('/edit-tacgia/{id}','TacgiaController@edit_tacgia')->name('edit.get.tacgia');
	Route::post('/edit-tacgia/{id}','TacgiaController@post_edit')->name('edit.post.tacgia');
	Route::get('/delete-tacgia/{id}','TacgiaController@delete_tacgia')->name('delete.tacgia');

	// Ban sach
	Route::get('/bansao','BansaoController@get_bansao')->name('list.bansao');
	Route::post('add-bansao','BansaoController@post_bansao')->name('add.post.bansao');
	Route::get('/edit-bansao/{id}','BansaoController@edit_bansao')->name('edit.get.bansao');
	Route::post('/edit-bansao/{id}','BansaoController@post_edit')->name('edit.post.bansao');
	Route::get('/delete-bansao/{id}','BansaoController@delete_bansao')->name('delete.bansao');


	//thong ke
	Route::get('/thong-ke','ChartController@chart')->name('thong-ke');

});


//pagecontroller
Route::get('/','Pagecontroller@index');
Route::get('/trang-chu','Pagecontroller@index')->name('page.home');
Route::post('/tim-kiem','FindController@timkiem')->name('page.timkiem');

// dang-ky
Route::get('/dang-nhap','Pagecontroller@login')->name('page.login');
Route::post('/dang-ky','LoginController@post_reg')->name('post.reg');
Route::post('/dang-nhap','LoginController@post_lg')->name('post.login');





// gio hang va checkout
Route::get('/gio-hang','CartController@cart')->name('cart');
Route::get('/them-gio-hang-{id}','CartController@addCart')->name('page.cart');
Route::get('/cap-nhat-san-pham','CartController@update')->name('updatecart');
Route::get('/xoa-san-pham-{id}','CartController@delCart')->name('delcart');
Route::get('/checkout','CartController@checkout')->name('checkout');

Route::post('/bill','BillController@bill')->name('bill');




// 
Route::group(['prefix'=>'danh-sach'],function(){
	Route::get('/','Pagecontroller@list')->name('page.list');
	Route::get('/loai-sach-{id}','Pagecontroller@list_chude')->name('page.list.chude');
	Route::get('/nha-xuat-ban-{id}','Pagecontroller@list_chude')->name('page.list.chude');
	Route::get('/tac-gia-{id}','Pagecontroller@list_chude')->name('page.list.chude');

	Route::get('/chi-tiet-sach-{id}','Pagecontroller@single')->name('page.single');

});

// tai khoan

Route::group(['prefix'=>'tai-khoan','middleware'=>'Taikhoan_middlawre'],function(){
	Route::get('/my-account','TaikhoanController@myaccount')->name('taikhoan.myaccount');
	Route::post('/update-account','TaikhoanController@update')->name('taikhoan.update.myaccount');

	
	// 
	Route::get('/phieu-muon','TaikhoanController@phieumuon')->name('taikhoan.phieumuon');

	Route::get('/chi-tiet-phieu-muon-{id}','TaikhoanController@ct_phieumuon')->name('taikhoan.ct.phieumuon');


	// 
	Route::get('/phieu-tra','TaikhoanController@phieutra')->name('taikhoan.phieutra');
	Route::get('/xu-ly-phieu-tra-{id}','TaikhoanController@get_trasach')->name('taikhoan.xuly.phieutra');
	Route::get('/chi-tiet-phieu-tra-{id}','TaikhoanController@ct_phieutra')->name('taikhoan.ct.phieutra');



	// 
	Route::get('/phieu-phat','TaikhoanController@phieuphat')->name('taikhoan.phieuphat');
	Route::get('/chi-tiet-phieu-phat-{id}','TaikhoanController@ct_phieuphat')->name('taikhoan.ct.phieuphat');

	

});


use App\Models\Vaitro;


/////////////////////////////////
Route::get('/vicuc',function(){
	// add user admin
	$user = new Vaitro;
	$user->vt_name='Admin';
	$user->save();
	// add user admin
	$user = new Vaitro;
	$user->vt_name='Độc giả';
	$user->save();
	
	// add user admin
	$user = new User;
	$user->password=bcrypt('123'); // mat khau
	$user->ten_user='Cao Vi';
	$user->email = 'admin@gmail.com';
	$user->trang_thai = '1';
	$user->level = '1';
	$user->phone = '0762999994';

	$user->gioi_tinh = '1';

    $user->save();
    $user->ma_user= "NV-000".$user->id;
    $user->save();
    
});

