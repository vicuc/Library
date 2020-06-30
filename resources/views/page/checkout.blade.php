@extends('page.master')
@section('title','Giỏ sách')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Mượn</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{route('page.home')}}">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Mượn</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<section class="wn__checkout__area section-padding--lg bg__white">
    <form action="{{ route('bill') }}" method="POST"> {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Thông tin của bạn</h3>
                        <div class="customar__field">
                            <div class="input_box">
                                <label>Mã số của bạn <span>*</span></label>
                                    <input type="text" name="code" value="{{ Auth::user()->ma_user }}" disabled>
                            </div>

                            {{--  --}}

                            <div class="input_box">
                                <label>Họ tên <span>*</span></label>
                                    <input type="text" name="name" value="{{ Auth::user()->ten_user }}" disabled>
                            </div>

                            {{--  --}}

                            <div class="input_box">
                                <label>Số điện thoại <span>*</span></label>
                                    <input type="text" name="code" value="{{ Auth::user()->phone }}" disabled>
                            </div>

                            {{--  --}}
                            <div class="input_box">
                                <label>Email <span>*</span></label>
                                    <input type="text" name="name" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:80%; margin-left:10%">MƯỢN NGAY</button>
                </div>
                <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__order__box">
                        <h3 class="onder__title">Sách mượn</h3>
                        <ul class="order__total">

                            <li>Sách</li>
                            <li>Tác giả</li>

                        </ul>
                        <ul class="order_product">
                            @foreach($cart as $carts)
                            <li>
                                {{ $carts->name }} 
                                × 
                                <a href="#" style="color:blue">{{ $carts->qty }}</a>
                                <span>{{ $carts->options->tacgia }}</span>
                            </li>
                            @endforeach
                        </ul>

                        <ul class="order__total">

                            <li>Ngày mượn</li>
                            <li>Ngày trả</li>

                        </ul>
                        <ul class="order_product">
                            <li style="padding-top: 0px !important;">
                                <a href="#" style="color:blue">
                                    {{ date("d-m-Y",strtotime($ngaymuon ))  }}
                                    <input type="hidden" value="{{ $ngaymuon }}" name="ngaymuon">
                                </a>
                                
                                <span style="color:red">
                                    {{ date("d-m-Y",strtotime($ngaytra ))  }}
                                    <input type="hidden" value="{{ $ngaytra }}" name="ngaytra">
                                </span>
                            </li>
                        </ul>
                        
                        <ul class="total__amount">
                            <li>Tổng sách mượn<span>{{ $cart->count() }} quyển</span></li>
                        </ul>
                    </div>
                    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingOne">
                                <a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>Điều kiện mượn</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="payment-body">Học sinh mượn tài liệu phải trả đúng hạn đã quy định, nếu quá thời hạn không được mượn sách tiếp và phải nộp phí quá hạn 1000 đ / 1 quyển / 1 ngày. Tài liệu mượn phải được hoàn trả trước khi học sinh tốt nghiệp. Nếu không hoàn trả đủ tài liệu, sinh viên không được nhận bằng tốt nghiệp.
Trường hợp tài liệu mượn bị mất hoặc hư hỏng, phải bồi thường theo nội quy Thư viện.</div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingTwo">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Thời gian trả</span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="payment-body">Thời gian trả bắt đầu từ tính từ ngày mượn đến 7 ngày là trả lại cho thư viện, tức là 1 tuần để mượn đọc.</div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </form>
</section>


@endsection