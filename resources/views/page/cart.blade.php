@extends('page.master')
@section('title','Giỏ sách')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Giỏ sách</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('page.home') }}">Thư viện</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Giỏ sách</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<a style="margin-left:80%; margin-top: 2%; color: #fff" class="btn btn-danger" href="{{Route('delcart',['id' => 'all'])}}"><i class="fa fa-trash-o"></i>&nbsp Xóa hết</a>
<div class="cart-main-area section-padding--lg bg--white" style="padding-top: 10px;">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">
                    <div class="table-content wnro__table table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Hình ảnh</th>
                                     <th class="product-name">Sách</th>
                                    <th class="product-price">Tác giả</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $carts)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="{{ route('page.single',['id' => $carts->id]) }}">
                                            <img style="width:80px; height:110px;" src="{{asset('public/admin/upload/sach/')}}/{{$carts->options->img}}" alt="product img">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="{{ route('page.single',['id' => $carts->id]) }}">{{ $carts->name }}</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">{{ $carts->options->tacgia }}</span>
                                    </td>
                                    <td class="product-quantity">
                                        <input type="number" value="{{$carts->qty}}" onchange="updatecart(this.value,'{{$carts->rowId}}')">
                                    </td>
                                    <td class="product-remove" style="padding-top: 0px !important;">
                                        <a href="{{Route('delcart',['id' => $carts->rowId])}}" style="padding-top: 0px !important;">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cartbox-total d-flex justify-content-between">
                        <ul class="cart__total__list">
                            <li>Tổng số sách</li>
                        </ul>
                        <ul class="cart__total__tk">
                            <li>
                                <span style="color:blue">{{ $cart->count() }}</span> quyển
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('checkout') }}" class="cart__total__amount">
                        <span style="margin-left:40%">Tiếp tục</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updatecart(qty, rowId){
      $.get(
          '{{Route('updatecart')}}',
          {qty:qty,rowId:rowId},
          function(){
              location.reload();
          }
          );
    }
  
  </script>


<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>

{!! Toastr::message() !!}
@endsection