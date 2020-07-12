@extends('layoutsadmin.index')
@section('content')
<style>
  .form-group .form-line {border-bottom:none}
  .form-group .form-control {padding:3px; border:1px solid #999}
  .form-group .form-line.abc {padding-top:5px;}
</style>
<body>
  <div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
      <div class="card">
        <div class="header">
          <h2> Thêm loại blog</h2>
          <ul class="header-dropdown m-r--5">
          </ul>
        </div>
        <div class="body">
          @if(Session::has('alert'))
          <p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
          @endif
           @foreach($loai as $l)
          <form class="form-horizontal" method="post" action="/admin/dulieusua/{{$l->Id_category}}">
            @csrf
            <div class="row clearfix">
              <div class="col-sm-3 form-control-label">
                <label  >Tên loại Blog</label>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control @error('category_blog') is-invalid @enderror " placeholder="Nhập tên loại Blog" id="category_blog" name="category_blog" value="{{$l->Ten_category}}" >
                    @error('category_blog')
                    <span class="invalid-feedback" role="alert" style="color: red">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-3 form-control-label">
                <label>Trạng thái</label>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <div class="form-line abc">
                    <input type="radio" id="AH1" name="AnHien" value="1" {{$l->Trangthai==1?'checked':''}}  checked="checked"  >
                    <label for="AH1">Hiện</label>
                    <input type="radio" id="AH0" name="AnHien" value="0" {{$l->Trangthai==0?'checked':''}} >
                    <label for="AH0">Ẩn</label>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

            <div class="row clearfix">
              <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Sữa loại Blog</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
@endsection