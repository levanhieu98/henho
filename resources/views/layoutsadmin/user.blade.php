<div class="user-info">
    <div class="image">
       @if (strpos(Auth::user()->img, 'https://graph.facebook.com') !== false) 
       <img src="{{Auth::user()->img}}" class="img-fluid rounded-circle" alt=""  width="48" height="48"">
       @elseif (strpos(Auth::user()->img, 'https://lh3.googleusercontent.com') !== false) 
       <img src="{{Auth::user()->img}}" class="img-fluid rounded-circle" width="48" height="48" alt="">
       @else
       <img src="{{'/frontend/'.Auth::user()->img}}" class="img-fluid rounded-circle" width="48" height="48" alt="">
       @endif
   </div>
   <div class="info-container">
    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
    <div class="email">{{Auth::user()->email}}</div>
    <div class="btn-group user-helper-dropdown">
        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
        <ul class="dropdown-menu pull-right">
            <li><a href="/admin/suathongtin"><i class="material-icons">person</i>Sửa thông tin</a></li>
            <li role="seperator" class="divider"></li>
            <li><a href="/admin/doimatkhau"><i class="material-icons">build</i>Đổi mật khẩu</a></li>
            <li role="seperator" class="divider"></li>
            <li><a href="/logout"><i class="material-icons">input</i>Đăng xuất</a></li>
        </ul>
    </div>
</div>
</div>