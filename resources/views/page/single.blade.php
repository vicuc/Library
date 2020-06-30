@extends('page.master')
@section('title','Thêm sách')
@section('page_content')
@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection
<div class="ht__bradcaump__area bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Shop Single</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Shop Single</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="maincontent bg--white pt--80 pb--55">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="wn__fotorama__wrapper">
                                <div  data-nav="thumbs">
                                    <img style="width:419px; height:527px;" src="{{asset('public/admin/upload/sach/')}}/{{$sach->s_image}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="product__info__main">
                                <h1>{{ $sach->s_name }}</h1>
                                <div class="product-reviews-summary d-flex">
                                    <ul class="rating-summary d-flex">
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                    </ul>
                                </div>
                        
                                <div class="box-tocart d-flex">
                                    
                                    <div class="addtocart__actions">
                                        <a href="{{ route('page.cart',['id' => $sach->s_id]) }}" class="tocart" type="submit" title="Add to Cart">
                                            Mượn sách
                                        </a>
                                    </div>
                                    <div class="product-addto-links clearfix">
                                        <a class="wishlist" href="#"></a>
                                        <a class="compare" href="#"></a>
                                    </div>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in">Chủ đề:
                                        <a href="#">
                                            <span style="color:blue">
                                                {{ $sach->chude->cd_name }}
                                            </span>
                                        </a>
                                    </span>
                                </div>
                                <div class="product-share">
                                    <ul>
                                        <li class="categories-title">Chia sẻ :</li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-twitter icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-tumblr icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-facebook icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-linkedin icons"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__info__detailed">
                    <div class="pro_details_nav nav justify-content-start" role="tablist">
                       
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Bình luận</a>
                    </div>
                    <div class="tab__container">
                        <!-- Start Single Tab Content -->
                        <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                            <div class="description__attribute">
                                <p>{!!$sach->s_desc!!}</p>
                                
                            </div>
                        </div>
                        {{--  Bình luận  --}}
                        <div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                            
                            @comments(['model' => $sach])
                            
                        </div>
                        <!-- End Single Tab Content -->
                    </div>
                </div>
                
                <br>
                <div class="wn__related__product">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Sách cùng chủ đề</h2>
                    </div>
                    <div class="row mt--60">
                        @foreach($bb as $s)
                            <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="product__thumb">
                                    <a class="first__img" href="{{ route('page.single',['id' => $s->s_id]) }}">
                                        <img style="width:270px; height:320px;" src="{{asset('public/admin/upload/sach/')}}/{{$s->s_image}}" alt="product image">
                                    </a>
                                    
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="{{ route('page.single',['id' => $s->s_id]) }}">{{ $s->s_name }}</a></h4>
                                    <ul class="prize d-flex">
                                        {{--  <li>$35.00</li>
                                        <li class="old_prize">$35.00</li>  --}}
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li>
                                                    <a class="cart" href="#">
                                                        <i class="bi bi-shopping-bag4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="wishlist" href="wishlist.html">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal">
                                                        <i class="bi bi-search"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__hover--content">
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('page.category')
        </div>
    </div>
</div>
<script src="{{asset('public/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/toastr/toastr.min.js')}}" ></script>

{!! Toastr::message() !!}
@endsection