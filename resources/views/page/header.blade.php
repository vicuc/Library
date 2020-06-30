
@yield('index')
@yield('header_page')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-6 col-lg-2">
            <div class="logo">
                <a href="{{ route('page.home') }}">
                    <img src="{{asset('public/page/images/logo\logo.png')}}" alt="logo images">
                </a>
            </div>
        </div>
        <div class="col-lg-8 d-none d-lg-block">
            <nav class="mainmenu__nav">
                <ul class="meninmenu d-flex justify-content-start">
                    <li><a href="{{ route('page.home') }}">Home</a></li>


                    <li class="drop">
                        <a href="shop-grid.html">Chủ Đề</a>
                        <div class="megamenu mega03">
                            @foreach($chude as $cd)
                            <ul class="item item03">
                                <li class="title">{{ $cd->cd_name }}</li>
                                @foreach($cd->sach as $sach)
                                <li>
                                    <a href="{{ route('page.single',['id' => $sach->s_id]) }}">{{ $sach->s_name }} </a>
                                </li>
                                @endforeach
                            </ul>
                            @endforeach 
                        </div>
                    </li>

                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" >Nhà sản xuất</a>
    
                        <ul class="dropdown-menu">
                          @foreach($nxb as $nxbs)
                          <li>
                            <a  class="dropdown-item" href="#">{{ $nxbs->nxb_name }}</a>
                          </li>
                          @endforeach 
                          
                        </ul>
                    </li>

                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" >Tác giả</a>
    
                        <ul class="dropdown-menu">
                          @foreach($tacgia as $tg)
                          <li>
                            <a  class="dropdown-item" href="#">{{ $tg->tg_name }}</a>
                          </li>
                          @endforeach 
                          
                        </ul>
                    </li>

                    <li class="drop">
                     
                        <div class="megamenu mega03">
                            @foreach($chude as $cd)
                            <ul class="item item03">
                                <li class="title">{{ $cd->cd_name }}</li>
                                @foreach($cd->sach as $sach)
                                <li>
                                    <a href="{{ route('page.single',['id' => $sach->s_id]) }}">{{ $sach->s_name }} </a>
                                </li>
                                @endforeach
                            </ul>
                            @endforeach
                            
                        </div>
                    </li>


                </ul>
            </nav>
        </div>
        <div class="col-md-6 col-sm-6 col-6 col-lg-2">
            <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                <li class="shop_search"><a class="search__active" href="#"></a></li>
                <li class="wishlist"><a href="#"></a></li>
                <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">{{ $data2->count() }}</span></a>
                    <!-- Start Shopping Cart -->
                    @if($data2->count() > 0)
                        <div class="block-minicart minicart__active" style="padding-top: 0px;">
                            <div class="minicart-content-wrapper">
                                <div class="micart__close" style="float:right">
                                    <span>close</span>
                                </div>

                                @foreach($data2 as $cart)
                                <div class="single__items" style="padding-top: 0px !important; margin-top: 10px !important;">
                                    <div class="miniproduct">
                                        
                                        <div class="item01 d-flex mt--20">
                                            <div class="thumb">
                                                <a href="{{ route('page.single',['id' => $cart->id]) }}">
                                                    <img style="width:75px; height:94px;"
                                                        src="{{asset('public/admin/upload/sach/')}}/{{$cart->options->img}}"
                                                        alt="product images">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h6><a class="prize" href="{{ route('page.single',['id' => $cart->id]) }}">{{ $cart->name }}</a></h6>
                                                <span class="">
                                                  Tác giả : <b> {{ $cart->options->tacgia }}</b>
                                                </span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Số lượng: <b>{{ $cart->qty }} quyển </b> </span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a>
                                                        </li>
                                                        <li><a href="{{Route('delcart',['id' => $cart->rowId])}}"><i class="zmdi zmdi-delete"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach


                               

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mini_action checkout" >
                                            <a class="checkout__btn" style="backgroud-color: #9fd84" href="{{ route('checkout') }}">MƯỢN</a>
                                        </div>
                                    </div>
                                    {{--    --}}
                                    <div class="col-md-7">
                                        <div class="mini_action cart">
                                            <a class="cart__btn" href="{{ route('cart') }}">
                                                Xem giỏ sách
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                    {{--    --}}

                            </div>
                        </div>
                    @endif
                    <!-- End Shopping Cart -->
                </li>
                @if(Auth::check())
                <li class="setting__bar__icon">
                    <a class="setting__active" href="#"></a>
                    <div class="searchbar__content setting__block" style="
                    padding-top: 0px !important;">

                        <div class="content-inner">
                            <div class="switcher-currency">
                                <strong class="label switcher-label">
                                    <span>Tài khoản: &nbsp {{ Auth::user()->ten_user }}</span>
                                </strong>
                                <div class="switcher-options">
                                    <div class="switcher-currency-trigger">
                                        <div class="setting__menu">
                                            <span>
                                                <a href="{{ route('taikhoan.myaccount') }}">My Account</a>
                                            </span>
                                            {{--    --}}
                                            <span>
                                                <a href="{{ route('taikhoan.phieumuon') }}">Phiếu mượn</a>
                                            </span>
                                            {{--    --}}

                                            <span>
                                                <a href="{{ route('taikhoan.phieutra') }}">Phiếu trả</a>
                                            </span>
                                            {{--    --}}

                                            <span>
                                                <a href="{{ route('taikhoan.phieuphat') }}">Phiếu phạt</a>
                                            </span>
                                            {{--    --}}

                                            
                                            <span>
                                                <a href="{{ route('out') }}">Đăng xuất</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @else
                <li class="setting__bar__icon">
                    <a class="setting__active" href="#">
                    </a>
                    <div class="searchbar__content setting__block" style="
                    padding-top: 0px !important;">

                        <div class="content-inner">
                            <div class="switcher-currency">
                                <strong class="label switcher-label">
                                    <span>Đăng nhập</span>
                                </strong>
                                <div class="switcher-options">
                                    <div class="switcher-currency-trigger">
                                        <div class="setting__menu">
                                            <span><a href="{{ route('page.login') }}">Đăng nhập</a></span>
                                            <span><a href="{{ route('page.login') }}">Tạo tài khoản</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>

   

    <!-- Start Mobile Menu -->
    <div class="row d-none">
        <div class="col-lg-12 d-none">
            <nav class="mobilemenu__nav">
                <ul class="meninmenu">
                    <li><a href="{{route('page.home')}}">Home</a>
                        <ul>
                            <li><a href="index.html">Home Style Default</a></li>
                            <li><a href="index-2.html">Home Style Two</a></li>
                            <li><a href="index-3.html">Home Style Three</a></li>
                            <li><a href="index-box.html">Home Box Style</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="portfolio.html">Portfolio</a>
                                <ul>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-three-column.html">Portfolio 3 Column</a></li>
                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="wishlist.html">Wishlist Page</a></li>
                            <li><a href="error404.html">404 Page</a></li>
                            <li><a href="faq.html">Faq Page</a></li>
                            <li><a href="team.html">Team Page</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid.html">Shop</a>
                        <ul>
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="shop-list.html">Shop List</a></li>
                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                            <li><a href="shop-no-sidebar.html">Shop No sidebar</a></li>
                            <li><a href="single-product.html">Single Product</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Page</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Mobile Menu -->
    <div class="mobile-menu d-block d-lg-none">
    </div>
    <!-- Mobile Menu -->
</div>
</header>
<!-- //Header -->
<!-- Tìm kiếm -->
<div class="brown--color box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" method="POST" action="{{ route('page.timkiem') }}"> {{ csrf_field() }}
        <div class="field__search">
            <input type="text" name="tukhoa" placeholder="Tìm kiếm theo tên, mô tả,...." required>
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
