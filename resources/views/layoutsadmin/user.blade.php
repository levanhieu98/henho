<div class="user-info">
    <div class="image">
        <img src="images/user.png" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
        <div class="email">{{Auth::user()->email}}</div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Thông tin cá nhân</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="/admin/doimatkhau"><i class="material-icons">build</i>Đổi mật khẩu</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="/logout"><i class="material-icons">input</i>Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</div>