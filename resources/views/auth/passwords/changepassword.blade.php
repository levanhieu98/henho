@extends('layouts.home')
@section('content')
<div class="container-fluid ">
    @if(Session::has('error'))
    <p class="alert alert-danger">{{Session::get('error')}}</p>
    @endif
    <form action="/capnhat" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{Auth::user()->email}}" disabled>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu cũ:</label>
            <input type="password" name="mkcu" class="form-control @error('mkcu') is-invalid @enderror"  >
            @error('mkcu')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <i class="far fa-gift-card"></i><label >Mật khẩu mới:</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mật khẩu mới" name="password"  autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label >Nhập lại mật khẩu</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu"  autocomplete="new-password">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary d-flex justify-content-center">Đổi mật khẩu</button>
    </form>
</div>
@endsection