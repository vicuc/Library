@extends('backend.master')
@section('title','Thêm sách')
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
                <div class="panel-heading">Thêm sách</div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post" action="{{ route('edit.post.sach',['id' => $s->s_id]) }}"
                        enctype="multipart/form-data">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Chủ đề</label>
                                    <select required name="cde" class="form-control">
                                        @foreach($chude as $cde)
                                        <option @if($s->s_cd == $cde->cd_id)
                                            {{"selected"}}
                                            @endif

                                            value="{{$cde->cd_id}}">{{$cde->cd_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nhà xuất bản</label>
                                    <select required name="nxb" class="form-control">
                                        @foreach($nhaxb as $nxbs)
                                        <option 
                                        @if($s->s_nxb == $nxbs->nxb_id)
                                            {{"selected"}}
                                        @endif

                                        
                                        value="{{$nxbs->nxb_id}}">{{$nxbs->nxb_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tác giả</label>
                                    <select required name="tacgia" class="form-control">
                                        @foreach($tacgia as $tg)
                                        <option 
                                        @if($s->s_tacgia == $tg->tg_id)
                                            {{"selected"}}
                                        @endif
                                        
                                        value="{{$tg->tg_id}}">{{$tg->tg_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--    --}}

                                <div class="form-group">
                                    <label>Tên sách</label>
                                    <input required type="text" name="name" value="{{ $s->s_name }}"
                                        class="form-control">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" style="padding: 0,0,0,0;">
                                            <i class="fa fa-picture-o"></i>
                                            Hình ảnh
                                        </button>
                                    </div>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                </br>
                                <div class="input-group">
                                    <img style="margin-bottom: 0px !important;" height="100px"
                                        src="{{asset('public/admin/upload/sach/')}}/{{$s->s_image}}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea id="editor" value="{{ $s->s_desc }}" type="text"
                                        name="mota">{{ $s->s_desc }}</textarea>

                                </div>

                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{route('list.sach')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        {{csrf_field()}}
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
