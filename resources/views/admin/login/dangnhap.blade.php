@extends('admin.login.layout')
@section('login_content')
<div class="log-w3">
<div class="w3layouts-main">
	<h2 style="color:#FFE4C4; text-align: center">Trang Quản Trị</h2>
	@if(session('thongbao'))
			<div class="alert alert-danger">{{session('thongbao')}}</div>
	@endif
		<form action="{{route('admin.post.log')}}" method="post">{{csrf_field()}}
			<input type="text" class="ggg" name="email" placeholder="Tài khoản đăng nhập" required="">
			<input type="password" class="ggg" name="password" placeholder="Mật khẩu" required="">
			<span><input type="checkbox" /> Nhớ đăng nhập</span>
			<h6><a href="#">Quên mật khẩu</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
		</form>
</div>
</div>
@endsection

