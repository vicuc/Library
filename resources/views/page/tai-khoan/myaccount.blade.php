@extends('page.master')
@section('title','Phiếu phạt')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">My account</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('taikhoan.myaccount') }}">Tài khoản</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">My account</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="my_account_area pt--80 pb--55 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('page.tai-khoan.category')
            </div>
            <div class="col-md-9">
                <form action="{{ route('taikhoan.update.myaccount') }}" method="POST"> {{ csrf_field() }}

                    <h4> Thông tin tài khoản : 
                        <a href="#" style="color:blue">{{ Auth::user()->ma_user }}</a>
                    </h4>
                    <br>

                    <div class="form-group col-md-7">
                        <label>Email *</label>
                        <input class="form-control" value="{{ Auth::user()->email }}" readonly >
                    </div>

                    <div class="form-group col-md-7">
                        <label>Họ tên *</label>
                        <input class="form-control" value="{{ Auth::user()->ten_user }}" name="hoten">
                    </div>

                    <div class="form-group col-md-7">
                        <label>Giới tính *</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input 
                                            @if(Auth::user()->gioi_tinh == 1)
                                            {{"checked"}}
                                            @endif
                                            type="radio" name="gioitinh" value="1">
                                    </div>
                                    <div class="col-md-3">
                                        Nam
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input 
                                            @if(Auth::user()->gioi_tinh == 2)
                                            {{"checked"}}
                                            @endif
                                            type="radio" name="gioitinh" value="2" >
                                    </div>
                                    <div class="col-md-3">
                                        Nữ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-7">
                        <label>Phone *</label>
                        <input class="form-control" value="{{ Auth::user()->phone }}" name="phone" >
                    </div>

                    <input class="btn btn-primary" type="submit" value="Cập nhật">

                </form>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('public/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/toastr/toastr.min.js')}}" ></script>

{!! Toastr::message() !!}
@endsection