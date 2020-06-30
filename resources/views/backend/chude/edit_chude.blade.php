@extends('backend.master')
@section('title','Sửa chủ đề')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục chủ đề</h1>
    </div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-5 col-lg-5">
		<div class="panel panel-primary">
			<div class="panel-heading">Sửa chủ đề </div>
		<div class="panel-body">
		@include('errors.note')
		    <form method="post" action="{{route('edit.post.chude',['id' => $cd->cd_id])}}">
			    <div class="form-group">
					<label>Tên chủ đề:</label>
    				<input type="text" name="name" class="form-control" placeholder="Tên chủ đề..." value="{{$cd->cd_name}}">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên chủ đề ..." value="Sửa">
				</div>
				<div class="form-goup">
					<a href="{{asset('chude')}}" class="form-control btn btn-danger">Hủy bỏ</a>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>
</div><!--/.row-->
</div>	<!--/.main-->
@stop
	