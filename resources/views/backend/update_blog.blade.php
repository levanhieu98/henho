@extends('layoutsadmin.index')
@section('content')
<style>
	.form-group .form-line {border-bottom:none}
	.form-group .form-control {padding:3px; border:1px solid #999}
	.form-group .form-line.abc {padding-top:5px;}
</style>
<div class="row clearfix">
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
		<div class="card">
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul type="none" >
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="header">
				<h2> Thêm Blog</h2>
			</div>
			<div class="body">
				@foreach($category_id as $cd)
				<form class="form-horizontal " method="post" action="/admin/dulieusuab/{{$cd->id}}" enctype="multipart/form-data" >
					@csrf
					<div class="row clearfix">
						<div class="col-sm-3 form-control-label">
							<label >Loại Blog</label>
						</div>
						<div class="col-sm-9 ">
							<select class="  show-tick" name="id">
								@foreach($category_blog as $cb)
								<option value="{{$cb->Id_category}}"
									@if($cd->Id_category==$cb->Id_category) 
									{{'selected'}} 
									@endif  >
									{{$cb->Ten_category}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-3 form-control-label">
								<label for="Tieu đề">Tieu đề</label>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<div class="form-line">
										<input type="text" id="Tieude" name="Tieude" class="form-control " placeholder= "Nhập tiêu đề"  min="1" max="1000" value="{{$cd->title}}">
										@error('text')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-3 form-control-label">
								<label>Hình đại diện</label>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<div class="form-line abc">
										<input type="file" class="form-control" id="Hinhdaidien" name="Hinhdaidien"   >
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-3 form-control-label">
								<label>Mô Tả</label>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<div class="form-line abc">
										<textarea class="form-control" id="Mota" name="Mota" rows="3" >{{$cd->descriptive}}</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-3 form-control-label">
								<label>Nội dung</label>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<div class="form-line abc">
										<textarea class="form-control ckeditor" id ="editor" name="Noidung" rows="3" >{{$cd->content}}</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-3 form-control-label">
								<label>Ngày đăng tin</label>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<div class="form-line abc">
										<input type="date" class="form-control" id="Ngaydangtin" name="Ngaydangtin" value="{{$cd->datesubmitted}}" >
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-3 form-control-label">
								<label>Tác giả</label>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<div class="form-line abc">
										<input type="text" class="form-control" id="Tacgia" name="Tacgia" placeholder="Tên tác giả" value="{{$cd->author}}">
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
										<input type="radio" id="AH3" name="AnHien" value="1" {{$cd->status==1?'checked':''}} checked="checked">
										<label for="AH3">Hiện</label>
										<input type="radio" id="AH4" name="AnHien" value="0" {{$cd->status==0?'checked':''}}  >
										<label for="AH4">Ẩn</label>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="row clearfix">
							<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
								<button type="submit" class="btn btn-primary m-t-15 waves-effect">Sửa blog</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	window.addEventListener('load', () => {
		document.querySelectorAll('.btn.dropdown-toggle.btn-default')[0].style.display = 'none';
	})
</script>

@endsection