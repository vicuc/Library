@extends('backend.master')
@section('title','Sửa tác giả')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục tác giả</h1>
    </div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-5 col-lg-5">
		<div class="panel panel-primary">
			<div class="panel-heading">Sửa tác giả </div>
		<div class="panel-body">
		@include('errors.note')
		    <form method="post" action="{{route('edit.post.tacgia',['id' => $cd->tg_id])}}">
			    <div class="form-group">
					<label>Tên tác giả:</label>
    				<input type="text" name="name" value="{{ $cd->tg_name }}"  class="form-control" placeholder="Tên tác giả..." value="{{$cd->cd_name}}">
				</div>

				<div class="form-group">
					<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên tác giả ..." value="Sửa">
				</div>

				<div class="form-goup">
					<a href="{{route('list.tacgia')}}" class="form-control btn btn-danger">Hủy bỏ</a>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>
</div><!--/.row-->
</div>	<!--/.main-->
@stop
	