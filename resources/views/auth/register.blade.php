@extends('layouts.app')
@section('content')
<div class="container ">
  @if(Session::has('error'))
  <p class="alert alert-danger">{{Session::get('error')}}</p>
  @endif
  <h2 class="text-center font-bold pt-4 pb-5 mb-5 mt-5"><strong></strong></h2>
  <div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true" id="step1"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
           {{--  <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a> --}}
           <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
       </div>
           {{--  <div class="steps-step-2">
                <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            </div> --}}
        </div>
    </div>
    <!-- First Step -->
    <form  action="{{ route('register')}}" method="POST" noValidate >
     @csrf
     <div class="row setup-content-2" id="step-1">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Thông tin đăng nhập</strong></h3>
            <div class="form-group md-form">
                <label for="email" data-error="wrong" data-success="right">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email') }}" required  autocomplete="email" >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group md-form mt-3">
                <label for="password" data-error="wrong" data-success="right">Mật khẩu</label>
                <div class="input-group">
                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" value="{{old('password') }}" required autocomplete="new-password">
                <div class="input-group-addon">
               <span toggle="#password-field" class="   fa fa-fw fa-eye field_icon toggle-password"></span>
                </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group md-form mt-3">
                <label for="password-confirm" data-error="wrong" data-success="right">Nhập lại mật khẩu</label>
                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required  autocomplete="new-password">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button" id="asd">Tiếp tục</button>
        </div>
    </div>

    <!-- Second Step -->
    <div class="row setup-content-2" id="step-2">
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
             <label class="radio-inline align-content-center"><input name="sex" id="inlineCheckbox1" value="1" type="radio" checked="checked"> Nam </label> </div>
             <div class="col-xs-4 col-md-4 ">
                <label class="radio-inline align-content-center"><input name="sex" id="inlineCheckbox2" value="0" type="radio">  Nữ </label> </div>
            </div>
        </div>
        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Quay lại</button>
        <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Tiếp tục</button>
    </div>
</div>

<!-- Third Step -->
<div class="row setup-content-2" id="step-3">
    <div class="col-md-12">
        <h3 class="font-weight-bold pl-0 my-4"><strong>Điều khoản</strong></h3>
        <div class="form-check">
            <input type="checkbox" id="checkbox111" class="form-check-input ml-2  @error('check') is-invalid @enderror" name="check"  required>
            <label for="checkbox111" class="form-check-label ml-1" >Tôi cam kết nội dung bên trên là đúng sự thật ,tôi sẽ chịu mọi trách nhiệm về hành vi khai báo của mình</label>
        </div>
        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Quay lại</button>
        {{--   <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button> --}}
        <button class="btn btn-success btn-rounded float-right" type="submit">Đăng ký</button>
    </div>
</div>

<!-- Fourth Step -->
{{-- <div class="row setup-content-2" id="step-4">
    <div class="col-md-12">
        <h3 class="font-weight-bold pl-0 my-4"><strong>Finish</strong></h3>
        <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
        <button class="btn btn-success btn-rounded float-right" type="submit">Submit</button>
    </div>
</div> --}}
</form>
</div>
<style>
    .form-control {
        color: black;
    }
</style>
@endsection
@section('js')
<script src="js/register.js"></script>
<script>
    $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $("#password");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
</script>
@endsection

