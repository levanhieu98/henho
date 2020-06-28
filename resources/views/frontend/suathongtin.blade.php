@extends('layouts.home')
@section('content')
<form  action="" method="POST" noValidate >
	@csrf
	<!-- Second Step -->
		<div class="col-md-12">
			<h3 class="font-weight-bold pl-0 my-4"><strong>Thông tin cá nhân</strong></h3>
			<div class="form-group md-form">
				<label for="name" data-error="wrong" data-success="right">Họ và tên</label>
				<input id="name" type="text" name="name"  class="form-control  @error('name') is-invalid @enderror " value="{{old('name')}}">
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group md-form mt-3">
				<label for="Dayofbirth-2" data-error="wrong" data-success="right">Ngày sinh</label>

				<div class="row"> 
					<div class="col-xs-8 col-md-8">
						<input type="date" class="form-control @error('dob') is-invalid @enderror " name="dob" value="{{old('dob')}}">
						@error('dob')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

				</div> 
			</div>
			<div class="form-group md-form">
				<label for="yourAddress-2" data-error="wrong" data-success="right">Đại chỉ</label>
				<div class="row"> 
					<div class="col-xs-4 col-md-4">
						<select class="form-control " name="thanhpho"  id="tp">              
							<option value="">Thành phố</option>            
						</select> 
					</div> 
					<div class="col-xs-4 col-md-4"> 
						<select class="form-control" id="quan" name="quan"> 
							<option value="">Quận</option> 
						</select> 
					</div> 
					<div class="col-xs-4 col-md-4"> 
						<select class="form-control" id="phuong" name="phuong" required> 
							<option value="">Phường</option>            
						</select> 
					</div> 
				</div>
			</div>
			<div class="form-group md-form mt-3">
				<div class="row">
					<label class="col-xs-4 col-md-4 "  for="Gender-2" data-error="wrong" data-success="right">Giới tính</label>
					<div class="col-xs-4 col-md-4 ">
						<label class="radio-inline align-content-center"><input name="sex" id="inlineCheckbox1" value="1" type="radio" checked="checked"> Nam </label> 
					</div>
						<div class="col-xs-4 col-md-4 ">
							<label class="radio-inline align-content-center"><input name="sex" id="inlineCheckbox2" value="0" type="radio">  Nữ </label>
							 </div>
						</div>
					</div>
					<div class="form-group md-form">
						<label for="job" data-error="wrong" data-success="right">Nghề nghiệp</label>
						<input id="job" type="text" name="job"  class="form-control  @error('job') is-invalid @enderror " value="{{old('job')}}">
						@error('job')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group md-form">
						<label for="habit" data-error="wrong" data-success="right">Sở thích</label>
						<textarea class="form-control @error('habit') is-invalid @enderror" name="habit" id="habit">{{old('habit')}}</textarea>
						@error('habit')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group md-form">
						<label for="intro" data-error="wrong" data-success="right">Giới thiệu sơ lược bản thân</label>
						<textarea class="form-control @error('intro') is-invalid @enderror" name="intro" id="intro">{{old('intro')}}</textarea>
						@error('intro')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group md-form">
						<label for="findlove" data-error="wrong" data-success="right">Mẫu người bạn thích ?</label>
						<textarea class="form-control @error('findlove') is-invalid @enderror" name="findlove" id="findlove">{{old('findlove')}}</textarea>
						@error('habit')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<button class="btn btn-success btn-rounded float-right mb-1 form-control" type="submit">Cập nhật</button>
				</div>
	</form>
@endsection
@section('js')
<script src="frontend/js/register.js"></script>
@endsection
