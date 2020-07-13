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
			<div class="header">
				<h2> Thêm Blog</h2>
			</div>
			<div class="body">
				<form class="form-horizontal " method="post" action="admin/tin/laydulieuthem" enctype="multipart/form-data" >
					@csrf
					<div class="row clearfix">
						<div class="col-sm-3 form-control-label">
							<label >Loại Blog</label>
						</div>
						 <div class="col-sm-9 ">
                                    <select class="  show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
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
									<input type="text" id="Tieude" name="Tieude" class="form-control " placeholder= "Nhập tiêu đề"  min="1" max="1000" value="{{old('Tieude')}}">
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
									<textarea class="form-control" id="Mota" name="Mota" rows="3" >{{old('Mota')}}</textarea>
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
									<textarea class="form-control ckeditor" id ="editor" name="Noidung" rows="3" >{{old('Noidung')}}</textarea>
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
									<input type="date" class="form-control" id="Ngaydangtin" name="Ngaydangtin" value="{{old('Ngaydangtin')}}" >
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
									<input type="text" class="form-control" id="Tacgia" name="Tacgia" placeholder="Tên tác giả" value="{{old('Tacgia')}}">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
							<button type="submit" class="btn btn-primary m-t-15 waves-effect">Thêm tin tức</button>
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