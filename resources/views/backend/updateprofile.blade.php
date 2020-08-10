  @extends('layoutsadmin.index')
  @section('content')

  <div class="login-box">

  	<div class="card">
  		<div class="body">
  			<form id="sign_in" method="POST" action="/admin/dulieusuathongtin" enctype="multipart/form-data">
  				@csrf
  				@if(Session::has('alert'))
  				<p class="alert alert-success">{{Session::get('alert')}}</p>
  				@endif
  				<div class="msg">Sửa thông tin </div>

 
  				<div class="input-group">
  					<span class="input-group-addon">
  						<i class="material-icons">person</i>
  					</span>
  					<div class="form-line">
  						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Họ tên " name="name" value={{$infor[0]->name}} >
  					</div>
  					@error('name')
  					<span class="invalid-feedback text-danger" role="alert">
  						<strong>{{ $message }}</strong>
  					</span>
  					@enderror
  				</div>

  				<div class="input-group">
  					<span class="input-group-addon">
  						<i class="material-icons">date_range</i>
  					</span>
  					<div class="form-line">
  						<input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{$infor[0]->dob}}" >
  					</div>
  					@error('date')
  					<span class="invalid-feedback text-danger" role="alert">
  						<strong>{{ $message }}</strong>
  					</span>
  					@enderror
  				</div>


  				<div class="input-group">
  					<span class="input-group-addon">
  						<i class="material-icons">local_dining</i>
  					</span>
  					<div class="form-line  ">
  						<input type="radio" id="AH1" name="gt" value="1" checked="checked" {{($infor[0]->gender==1)?'checked':''}} >
  						<label for="AH1">Nam</label>
  						<input type="radio" id="AH2" name="gt" value="0" {{($infor[0]->gender==0)?'checked':''}} >
  						<label for="AH2">Nữ</label>
  					</div>
  					@error('date')
  					<span class="invalid-feedback text-danger" role="alert">
  						<strong>{{ $message }}</strong>
  					</span>
  					@enderror
  				</div>

  				<div class="input-group">
  					<span class="input-group-addon">
  						<i class="material-icons">image</i>
  					</span>
  					<div class="form-line">
  						<input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"   autocomplete="new-password">
  					</div>
  					@error('image')
  					<span class="invalid-feedback text-danger" role="alert">
  						<strong>{{ $message }}</strong>
  					</span>
  					@enderror
  				</div>

  				<div class="form-group md-form">
  					<label for="yourAddress-2" data-error="wrong" data-success="right"><i class="material-icons">location_on</i></label>

  					<div class="row"> 
  						<div class="col-xs-4 col-md-4">
  							<select class="form-control  " name="thanhpho"  id="tp">              
  								<option value="">Thành phố</option>            
  							</select> 
  						</div> 
  						<div class="col-xs-4 col-md-4"> 
  							<select class="form-control" id="quan" name="quan"> 
  								<option value="">Quận</option> 
  							</select> 
  						</div> 
  						<div class="col-xs-4 col-md-4"> 
  							<select class="form-control" id="phuong" name="phuong"> 
  								<option value="">Phường</option>            
  							</select> 
  						</div> 
  					</div>
  				</div>

  				<div class="row">

  					<div class="col-xs-12">
  						<button class="btn btn-block bg-pink waves-effect" type="submit">Đồng ý</button>
  					</div>
  					<div class="col-xs-6 align-left">
  						<a href="/admin/home">Quay lại</a>
  					</div>
  				</div>
  			</form>
  		</div>
  	</div>
  </div>
  @endsection
  <script>
  	window.addEventListener('load', () => {
  		document.querySelectorAll('.btn.dropdown-toggle.btn-default')[0].style.display = 'none';
  	})
  	window.addEventListener('load', () => {
  		document.querySelectorAll('.btn.dropdown-toggle.btn-default')[1].style.display = 'none';
  	})
  	window.addEventListener('load', () => {
  		document.querySelectorAll('.btn.dropdown-toggle.btn-default')[2].style.display = 'none';
  	})


  </script>
