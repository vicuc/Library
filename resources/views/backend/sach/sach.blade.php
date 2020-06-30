@extends('backend.master')
@section('title','Danh mục sách')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sách</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{route('get.sach')}}" class="btn btn-primary">Thêm sách</a>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th width="30%">Tên Sách</th>
                                        <th>Hình ảnh</th>
                                        <th width="20%">Chủ đề</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slist as $s)
                                    <tr>
                                        <td style="padding-top: 5%;">{{$s->s_id}}</td>
                                        <td style="padding-top: 5%;">{{$s->s_name}}</td>
                                        <td>
                                            <img style="margin-bottom: 0px !important;" height="130px"
                                                src="{{asset('public/admin/upload/sach/')}}/{{$s->s_image}}"
                                                class="thumbnail">
                                        </td>
                                        <td style="padding-top: 5%;">{{$s->cd_name}}</td>
                                        <td style="padding-top: 5%;">
                                            <a href="{{ route('edit.get.sach',['id' => $s->s_id]) }}"
                                                class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                Sửa</a>
                                            <a href="{{ route('delete_sach',['id' => $s->s_id]) }}"
                                                class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                                Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
