@extends('page.master')
@section('title','Phiếu trả')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Phiếu trả</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('taikhoan.myaccount') }}">Tài khoản</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Phiếu trả</span>
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
                        <th scope="col">Mã phiếu trả</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @php
                    $stt = 1;
                    @endphp
                    <tbody>
                      @foreach($phieutra as $pm)
                      <tr>
                        <th scope="row">{{ $stt++ }}</th>
                        {{--    --}}
                        <td>
                          <a href="{{ route('taikhoan.ct.phieutra',['id' => $pm->pt_id]) }}">
                            {{ $pm->pt_code }}
                          </a>
                        </td>
                        {{--    --}}
                        <td>
                          @if($pm->pt_status == 1)
                            <span style="color:green"> Trả đúng hẹn </span>
                          @elseif($pm->pt_status == 2)
                            <span style="color:red"> Trả trễ </span>
                          @endif
                        </td>

                        {{--    --}}
                        <td>@mdo</td>
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