  @extends('layoutsadmin.index')
  @section('content')

  <div class="login-box">

    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="/admin/dthemquantri">
                @csrf
                @if(Session::has('alert'))
                <p class="alert alert-success">{{Session::get('alert')}}</p>
                @endif
                <div class="msg">Thêm mới</div>
                
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{old('email')}}" autocomplete="email" >
                    </div>
                    @error('email')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Họ tên " name="name" value={{old('name')}} >
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
                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{old('date')}}" >
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
                      <input type="radio" id="AH1" name="gt" value="1" checked="checked" >
                      <label for="AH1">Nam</label>
                      <input type="radio" id="AH2" name="gt" value="0" >
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
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mật khẩu " name="password"  autocomplete="new-password">
                </div>
                @error('password')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu"  autocomplete="new-password">
             </div>
             @error('password_confirmation')
             <span class="invalid-feedback text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
