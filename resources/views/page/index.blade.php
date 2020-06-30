@extends('page.master')
@section('title','Trang chu')
@section('page_content')

@section('index')
<header id="wn__header" class="header__area header__absolute sticky__header">
@endsection

    <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        <!-- Start Single Slide -->
        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                <h2>Sách <span>là </span></h2>
                                <h2>cửa sổ <span>tâm hồn </span></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                <h2>Việc đọc <span>đối với tâm trí </span></h2>
                                <h2>cũng giống như  <span>thể dục </span></h2>
                                <h2>đối với <span>cơ thể </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>

    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Sách <span class="color--theme">Mới</span></h2>
                    </div>
                </div>
            </div>
            <!-- Start Single Tab Content -->
            <div class="furniture--4 border--round arrows_style owl-carousel owl-theme mt--50">
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img
                                src="{{asset('public/page/images/books\1.jpg')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img
                                src="{{asset('public/page/images/books\2.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">Robin Parrish</a></h4>
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                    </li>
                                    <li><a class="wishlist" href="wishlist.html"><i
                                                class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View"
                                            class="quickview modal-view detail-link" href="#productmodal"><i
                                                class="bi bi-search"></i></a></li>
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
                <!-- Start Single Product -->
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img
                                src="{{asset('public/page/images/books\3.jpg')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img
                                src="{{asset('public/page/images/books\4.jpg')}}" alt="product image"></a>
                        <div class="hot__box color--2">
                            <span class="hot-label">HOT</span>
                        </div>
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">The Remainng</a></h4>
                        
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                    </li>
                                    <li><a class="wishlist" href="wishlist.html"><i
                                                class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View"
                                            class="quickview modal-view detail-link" href="#productmodal"><i
                                                class="bi bi-search"></i></a></li>
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
                <!-- Start Single Product -->
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img
                                src="{{asset('public/page/images/books\5.jpg')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img
                                src="{{asset('public/page/images/books\6.jpg')}}" alt="product image"></a>
                        
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                        
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                    </li>
                                    <li><a class="wishlist" href="wishlist.html"><i
                                                class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View"
                                            class="quickview modal-view detail-link" href="#productmodal"><i
                                                class="bi bi-search"></i></a></li>
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
                <!-- Start Single Product -->
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img
                                src="{{asset('public/page/images/books\7.jpg')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img
                                src="{{asset('public/page/images/books\8.jpg')}}" alt="product image"></a>
                        
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">Lando</a></h4>
                        
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                    </li>
                                    <li><a class="wishlist" href="wishlist.html"><i
                                                class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View"
                                            class="quickview modal-view detail-link" href="#productmodal"><i
                                                class="bi bi-search"></i></a></li>
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
                <!-- Start Single Product -->
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img
                                src="{{asset('public/page/images/books\9.jpg')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img
                                src="{{asset('public/page/images/books\10.jpg')}}" alt="product image"></a>
                        
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">Doctor Wldo</a></h4>
                        
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                    </li>
                                    <li><a class="wishlist" href="wishlist.html"><i
                                                class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View"
                                            class="quickview modal-view detail-link" href="#productmodal"><i
                                                class="bi bi-search"></i></a></li>
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
                <!-- Start Single Product -->
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img
                                src="{{asset('public/page/images/books\11.jpg')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img
                                src="{{asset('public/page/images/books\2.jpg')}}" alt="product image"></a>
                        <div class="hot__box">
                            <span class="hot-label">SÁCH NỔI BẬT</span>
                        </div>
                    </div>
                    <div class="product__content content--center content--center">
                        <h4><a href="single-product.html">Ghost</a></h4>
                        
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                    </li>
                                    <li><a class="wishlist" href="wishlist.html"><i
                                                class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View"
                                            class="quickview modal-view detail-link" href="#productmodal"><i
                                                class="bi bi-search"></i></a></li>
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
                    <!-- Start Single Product -->
                </div>
            </div>
            <!-- End Single Tab Content -->
        </div>
    </section>
    <!-- Start BEst Seller Area -->
    <!-- Start NEwsletter Area -->
    <section class="wn__newsletter__area bg-image--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                    <div class="section__title text-center">
                        <h2>Tham Gia </h2>
                    </div>
                    <div class="newsletter__block text-center">
                        <p>Đăng ký nhận bản tin của chúng tôi để cập nhật nhanh nhất những quyển sách hay.</p>
                        <form action="#">
                            <div class="newsletter__box">
                                <input type="email" placeholder="Email">
                                <button>Đăng Ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End NEwsletter Area -->
    <!-- Start Best Seller Area -->
    <section class="wn__bestseller__area bg--white pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">TẤT CẢ <span class="color--theme">SÁCH</span></h2>
                    </div>
                </div>
            </div>
            
            <div class="tab__container mt--60">
                <!-- Start Single Tab Content -->
                <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center content--center">
                                        <h4><a href="single-product.html">Ghost</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$50.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center content--center">
                                        <h4><a href="single-product.html">Ghost</a></h4>
                                        
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">HOT</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Doctor Wldo</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$35.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">HOT</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Doctor Wldo</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$35.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">HOT</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Lando</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$35.00</li>
                                            <li class="old_prize">$50.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\11.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">HOT</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Lando</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$35.00</li>
                                            <li class="old_prize">$50.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\12.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                    </div>
                </div>
                <!-- End Single Tab Content -->
                <!-- Start Single Tab Content -->
                <div class="row single__tab tab-pane fade" id="nav-biographic" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\10.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\11.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\12.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                    </div>
                </div>
                <!-- End Single Tab Content -->
                <!-- Start Single Tab Content -->
                <div class="row single__tab tab-pane fade" id="nav-adventure" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\12.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\11.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\11.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\10.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\10.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                    </div>
                </div>
                <!-- End Single Tab Content -->
                <!-- Start Single Tab Content -->
                <div class="row single__tab tab-pane fade" id="nav-children" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\10.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\12.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\5.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\12.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\1.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                    </div>
                </div>
                <!-- End Single Tab Content -->
                <!-- Start Single Tab Content -->
                <div class="row single__tab tab-pane fade" id="nav-cook" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\10.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\9.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\7.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\4.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                        <div class="single__product">
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\8.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\3.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">BEST SALLER</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\2.jpg')}}"
                                                alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img
                                                src="{{asset('public/page/images/books\6.jpg')}}"
                                                alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">SÁCH MƯỢN NHIỀU</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                        <ul class="prize d-flex">
                                            <li>$40.00</li>
                                            <li class="old_prize">$35.00</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="cart.html"><i
                                                                class="bi bi-shopping-bag4"></i></a></li>
                                                    <li><a class="wishlist" href="wishlist.html"><i
                                                                class="bi bi-shopping-cart-full"></i></a></li>
                                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
                                                    </li>
                                                    <li><a data-toggle="modal" title="Quick View"
                                                            class="quickview modal-view detail-link"
                                                            href="#productmodal"><i class="bi bi-search"></i></a>
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
                            </div>
                            <!-- Start Single Product -->
                        </div>
                    </div>
                </div>
                <!-- End Single Tab Content -->
            </div>
        </div>
    </section>
    <!-- Start BEst Seller Area -->
    <!-- Start Recent Post Area -->
    <!-- End Recent Post Area -->
    <!-- Best Sale Area -->
    <section class="best-seel-area pt--80 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center pb--50">
                        <h2 class="title__be--2">SÁCH <span class="color--theme">MƯỢN NHIỀU </span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider center">
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\1.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\2.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\3.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\4.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\5.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\6.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\7.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class="product product__style--3">
                <div class="product__thumb">
                    <a class="first__img" href="single-product.html"><img
                            src="{{asset('public/page/images/best-sell-product\8.jpg')}}" alt="product image"></a>
                </div>
                <div class="product__content content--center">
                    <div class="action">
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                <li><a class="wishlist" href="wishlist.html"><i
                                            class="bi bi-shopping-cart-full"></i></a>
                                </li>
                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                                        href="#productmodal"><i class="bi bi-search"></i></a></li>
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
            <!-- Single product end -->
        </div>
    </section>

    @endsection