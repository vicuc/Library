@extends('page.master')
@section('title','Đăng ký')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Đăng nhập & Đăng ký</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('page.home') }}">Thư viện</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Đăng nhập & Đăng ký</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="my_account_area pt--80 pb--55 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Đăng nhập</h3>
                    <form action="{{ route('post.login') }}" method="POST"> {{ csrf_field() }}
                        <div class="account__form">
                            <div class="input__box">
                                <label>Email address <span>*</span></label>
                                <input type="text" name="email">
                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="form__btn">
                                <button type="submit">Đăng nhập</button>
                                <label class="label-for-checkbox">
                                    <input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <a class="forget_pass" href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Đăng ký</h3>
                    <form action="{{ route('post.reg') }}" method="POST"> {{ csrf_field() }}
                        <div class="account__form">

                            <div class="input__box">
                                <label>Họ tên <span>*</span></label>
                                <input type="text" name="name" required>
                            </div>


                            <div class="input__box">
                                <label>Email address <span>*</span></label>
                                <input type="email" name="email" required>
                            </div>

                            <div class="input__box">
                                <label>Số điện thoại <span>*</span></label>
                                <input type="text" name="phone" required>
                            </div>

                            <div class="input__box">
                                <label>Giới tính <span>*</span></label>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                <input  name="gioitinh" type="radio" style="height: 20px;" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <span>Nam</span>
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input name="gioitinh" type="radio" style="height: 20px;" value="2">
                                            </div>
                                            <div class="col-md-3">
                                                <span>Nữ</span>
                                            </div>
                                        </div> 
                                    </div>

                                </div> 

                            </div>


                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password" required>
                            </div>

                            <div class="input__box">
                                <label>Confirm Password<span>*</span></label>
                                <input type="password" name="confirmpassword" required>
                            </div>

                            <div class="form__btn">
                                <button type="submit">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('public/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/toastr/toastr.min.js')}}" ></script>

{!! Toastr::message() !!}
@endsection