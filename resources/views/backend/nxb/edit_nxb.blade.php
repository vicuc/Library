@extends('backend.master')
@section('title','Sửa Nhà xuất bản')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục Nhà xuất bản</h1>
    </div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-5 col-lg-5">
		<div class="panel panel-primary">
			<div class="panel-heading">Sửa Nhà xuất bản </div>
		<div class="panel-body">
		@include('errors.note')
		    <form method="post" action="{{route('edit.post.nxb',['id' => $cd->nxb_id])}}">
			    <div class="form-group">
					<label>Tên Nhà xuất bản:</label>
    				<input type="text" name="name" value="{{ $cd->nxb_name }}" class="form-control" placeholder="Tên Nhà xuất bản..." value="{{$cd->cd_name}}">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên Nhà xuất bản ..." value="Sửa">
				</div>
				<div class="form-goup">
					<a href="{{asset('nxb')}}" class="form-control btn btn-danger">Hủy bỏ</a>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>
</div><!--/.row-->
</div>	<!--/.main-->
@stop
	