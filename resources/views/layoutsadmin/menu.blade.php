<div class="menu">
    <ul class="list">
        <li class="active">
            <a href="/admin/home">
                <i class="material-icons">home</i>
                <span>Trang chủ</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">list</i>
                <span>Thể loại Blog</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="/admin/loaiBlog">Danh sách </a>
                </li>
                <li>
                    <a href="/admin/themloaiBlog">Thêm mới</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">pages</i>
                <span> Blog</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="/admin/blog">Danh sách </a>
                </li>
                <li>
                    <a href="/admin/themblog">Thêm Mới</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle ">
                <i class="material-icons">perm_phone_msg</i>
                <span>Liên hệ</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="/admin/contact">Danh sách</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">create</i>
                <span>Đánh giá</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="/admin/review">Danh sách</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">account_circle</i>
                <span>User</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="/admin/dsuser">User</a>
                </li>

            </ul>
        </li>
            
             <li>
            <a href="javascript:void(0);" class="menu-toggle {{Auth::user()->email=='lehieu1142@gmail.com'?'':'hidden'}}">
                <i class="material-icons">account_circle</i>
                <span>Quản trị</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="/admin/dsadmin">Danh sách</a>
                </li>

                 <li>
                    <a href="/admin/themquantri">Thêm quản trị</a>
                </li>

            </ul>
        </li>
    </ul>
</div>