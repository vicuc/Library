@extends('backend.master')
@section('title','Danh mục Tác giả')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục Tác giả</h1>
			</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-5 col-lg-5">
		<div class="panel panel-primary">
			<div class="panel-heading">Thêm Tác giả</div>
						<div class="panel-body">
						@include('errors.note')
						    <form method="post" action="{{route('add.post.tacgia')}}"> 
					            <div class="form-group">
								    <label>Tên Tác giả:</label>
    							    <input type="text" name="name" class="form-control" placeholder="Tên Tác giả..." required="">
								</div>

						<div class="form-group">
						    <input type="submit" name="submit" class="form-controll
							btn btn-primary" placeholder="Tên Tác giả..." value="Thêm Mới">
						</div>
						{{csrf_field()}}
						    </form>   
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Tác giả</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
									  <th>Tên Tác giả</th>
					                  
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
								  @foreach($tacgialist as $cd)
								<tr>
									<td>{{$cd->tg_name}}</td>
								
									<td>
			                    		<a href="{{route('edit.get.tacgia',['id' => $cd->tg_id])}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Sửa</a>
			                    		<a href="{{route('delete.tacgia',['id' => $cd->tg_id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
			                    			<i class="fa fa-trash-o"></i> Xóa</a>
			                  		</td>
			                  	</tr>
								  @endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
@stop
	