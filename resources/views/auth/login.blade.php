<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login" >
        <div class="modal-content" >
            <form action="{{route('login')}}" method="post"  >
                @csrf
                <div class="modal-header">              
                    <h4 class="modal-title">Đăng nhập</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body ">               
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autocomplete="email" autofocus  oninvalid="this.setCustomValidity('Email không hợp lệ')"
                        oninput="this.setCustomValidity('')">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="clearfix ">
                            <label>Mật khẩu</label>
                            <div class="input-group">
                                <input type="password"  id="pass_log_id" class=" form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" required  autocomplete="email" autofocus  oninvalid="this.setCustomValidity('Chưa nhập mật khẩu')"
                                oninput="this.setCustomValidity('')">
                                <div class="input-group-addon">
                                    <span toggle="#password-field" class=" fa fa-fw fa-eye field_icon toggle-password"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-body mb-5 ">              
                    <div class="form-group ">
                        <input type="submit" class="btn btn-primary pull-right form-control" value="Đăng nhập">
                    </div>

                    <a href="{{ route('password.request') }}" class="pull-right text-muted"><small>Quên mật khẩu?</small></a>
                </div>
                <div class="modal-footer"  >
                    <a href="" class="btn btn-lg btn-social btn-facebook form-control " id="hover">
                        <i class="fa fa-facebook fa-fw"></i><span class="font"> Sign in with Facebook</span>
                    </a>
                    <a href="" class="btn btn-lg btn-social btn-google form-control  " id="hover">
                        <i class="fa fa-google fa-fw bg-"></i> <span class="font">Sign in with Google</span>    
                    </a>
                </div>
            </form>
        </div>
    </div>
</div> 
<style>
    .form-control {
        color: black;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<script>
    $(document).on('click', '.toggle-password', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#pass_log_id");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
</script>
