@extends('page.master')
@section('title','Đăng ký')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Phiếu mượn</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('taikhoan.myaccount') }}">Tài khoản</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Phiếu mượn</span>
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
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã phiếu mượn</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @php
                    $stt = 1;
                    @endphp
                    <tbody>
                      @foreach($phieumuon as $pm)
                      <tr>
                        <th scope="row">{{ $stt++ }}</th>
                        {{--    --}}
                        <td>
                          <a href="{{ route('taikhoan.ct.phieumuon',['id' => $pm->pm_id]) }}">
                            {{ $pm->pm_code }}
                          </a>
                        </td>
                        {{--    --}}
                        <td>
                          @if($pm->pm_status == 1)
                            <span style="color:green"> Đang mượn </span>
                          @elseif($pm->pm_status == 2)
                            <span style="color:blue"> Đã trả </span>
                          @endif
                        </td>

                        {{--    --}}
                        <td>
                          
                          @if($pm->pm_status == 1)
                            <a href="{{ route('taikhoan.xuly.phieutra',['id' => $pm->pm_id]) }}" class="btn btn-warning" style="font-size: 12px;" onclick="return confirm('Bạn đồng ý trả sách ?')">
                            Trả sách
                          </a>
                          @elseif($pm->pm_status == 2)
                            <a href="#" class="btn btn-secondary" style="font-size: 12px; color: #fff">
                              Trả sách
                          </a>
                          @endif

                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('public/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/toastr/toastr.min.js')}}" ></script>

{!! Toastr::message() !!}
@endsection