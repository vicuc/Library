@extends('page.master')
@section('title','Chi tiết phiếu phạt')
@section('page_content')

@section('header_page')
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
@endsection

<div class="ht__bradcaump__area bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    @foreach($ct_phieuphat as $pm)

                    @endforeach
                    <h2 class="bradcaump-title">Chi tiết Phiếu phạt - <a href="#" style="color:yellow" >{{ $pm->ctphieuphat->pt_code }}</a></h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('taikhoan.myaccount') }}">Tài khoản</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Chi tiết Phiếu phạt <a href="#" style="color:yellow">{{ $pm->ctphieuphat->pt_code }}</a></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<a style="margin-left:10px; color:#fff" href="{{ route('taikhoan.phieumuon') }}" class="btn btn-primary">Quay lại</a>
<section class="my_account_area pt--30 pb--55 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Lý do</th>
                        <th scope="col">Mức phạt</th>
                        <th scope="col">Ghi chú</th>

                      </tr>
                    </thead>
                    @php
                    $stt = 1;
                    @endphp
                    <tbody>
                      @foreach($ct_phieuphat as $pm)
                      <tr>
                        <th scope="row">{{ $stt++ }}</th>
                        {{--    --}}
                        <td>
                            {!! $pm->li_do !!}
                        </td>
                        {{--    --}}
                        <td>
                           <a href="#" style="color:red"> 
                               {{ number_format($pm->muc_phat,0,',','.') }} đ
                               
                            </a>
                        </td>

                        {{--    --}}
                        <td>
                            Mức phạt = Số ngày trả trễ x 5.000
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