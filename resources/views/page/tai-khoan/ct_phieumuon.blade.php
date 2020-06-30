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
                    @foreach($ct_phieumuon as $pm)

                    @endforeach
                    <h2 class="bradcaump-title">Chi tiết Phiếu mượn - <a href="#" style="color:yellow" >{{ $pm->ctphieumuon->pm_code }}</a></h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('taikhoan.myaccount') }}">Tài khoản</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Chi tiết Phiếu mượn <a href="#" style="color:yellow">{{ $pm->ctphieumuon->pm_code }}</a></span>
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
                        <th scope="col">Bản sao</th>
                        <th scope="col">Ngày mượn</th>
                        <th scope="col">Ngày hết hạn trả</th>
                      </tr>
                    </thead>
                    @php
                    $stt = 1;
                    @endphp
                    <tbody>
                      @foreach($ct_phieumuon as $pm)
                      <tr>
                        <th scope="row">{{ $stt++ }}</th>
                        {{--    --}}
                        <td>
                          <a href="{{ route('page.single',['id' => $pm->ctbansao->bssach->s_id]) }}">
                            {{ $pm->ctbansao->bs_name }}
                          </a>
                        </td>
                        {{--    --}}
                        <td>
                            <span style="color:blue"> 
                                {{ date("d-m-Y",strtotime($pm->ngay_muon ))  }}
                            </span>
                        </td>

                        {{--    --}}
                        <td>
                            <span style="color:red">
                                {{ date("d-m-Y",strtotime($pm->ngay_tra ))  }}
                            </span>
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