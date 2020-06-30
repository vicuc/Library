@extends('page.master')
@section('title','Thêm sách')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection
<div class="ht__bradcaump__area bg-image--5"> // số 5 đẹp
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach($sach as $cd)
                    {{--  lấy ra tên chủ đề belongsto  --}}
                @endforeach
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">{{ $cd->chude->cd_name }}</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('page.home') }}">Thư viện</a>
                        <span class="brd-separetor">/</span>
                        
                        <span class="breadcrumb_item active">{{ $cd->chude->cd_name }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Shop Page -->
<section class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            {{-- Danh muc   --}}
            @include('page.category')
            {{--    --}}
            <div class="col-lg-9 col-12 order-1 order-lg-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                            <div class="shop__list nav justify-content-center" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
                            </div>
                            <p>Có <span style="color:blue">{{ $cd->chude->sach->count() }}</span> sách</p>
                            <div class="orderby__wrapper">
                                <span>Sort By</span>
                                <select class="shot__byselect">
                                    <option>Default sorting</option>
                                    <option>HeadPhone</option>
                                    <option>Furniture</option>
                                    <option>Jewellery</option>
                                    <option>Handmade</option>
                                    <option>Kids</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab__container">
                    <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                        <div class="row">
                            @foreach($sach as $s)
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
                                                    <a class="cart" href="cart.html">
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

                        
                        <ul class="wn__pagination">
                            <li >
                                    {!! $sach->links() !!}
                            </li>
                           
                        </ul>
                    </div>
                    <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
                        <div class="list__view__wrapper">
                            @foreach($sach as $s)

                            <div class="list__view">
                                <div class="thumb">
                                    <a class="first__img" href="{{ route('page.single',['id' => $s->s_id]) }}">
                                        <img style="width:261px; height:327px;" src="{{asset('public/admin/upload/sach/')}}/{{$s->s_image}}" alt="product images">
                                    </a>
                                    
                                </div>
                                <div class="content">
                                    <h2><a href="{{ route('page.single',['id' => $s->s_id]) }}">{{ $s->s_name }}</a></h2>
                                    <ul class="rating d-flex">
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <ul class="prize__box">
                                        {{--  <li>$111.00</li>
                                        <li class="old__prize">$220.00</li>  --}}
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
                                        augue nec est tristique auctor. Donec non est at libero vulputate
                                        rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi,
                                        vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <ul class="cart__action d-flex">
                                        <li class="cart"><a href="cart.html">Mượn sách</a></li>
                                        <li class="wishlist"><a href="cart.html"></a></li>
                                        <li class="compare"><a href="cart.html"></a></li>
                                    </ul>

                                </div>
                            </div>

                            <br>

                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
