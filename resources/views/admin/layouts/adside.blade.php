<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        <img src="{{asset('admin/dist/img/Logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">BDS 106</span>
    </a>
    <div class="sidebar">
        <div class="user-panel">
            <div class="mt-3 d-flex">
                <div class="image mr-2">
                    <img src=" {{asset('admin/dist/img/admin.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name ?? " " }}</a>
                </div>
            </div>
            <nav class="mt-3 pb-3">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link badge-danger" data-toggle="modal" data-target="#dialogLogout">
                            <i class="nav-icon fas fa-power-off"></i>&emsp;
                            Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <i class="nav-icon fab fa-dashcube"></i>
                    <p>
                        Dash Board
                    </p>
                </a>
               </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Banner
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a 
                            href="{{ route('banner.add') }}" 
                            class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a 
                            href="{{ route('banner.list') }}" 
                            class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách banner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Sản phẩm (Project)
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a 
                            href="{{ route('project.add') }}" 
                            class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>Thêm sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a 
                            href="{{ route('project.list') }}" 
                            class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Bài viết (Post)
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a 
                            href="{{ route('post.add') }}" 
                            class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm bài viết</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a 
                            href="{{ route('post.list') }}" 
                            class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách bài viết</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-person-booth"></i>
                        <p>
                            Khách hàng (Customer)
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a 
                            href="{{ route('customer.list') }}" 
                            class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>Danh sách khách hàng</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-person-booth"></i>
                        <p>
                            Thành viên (Member)
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a 
                            href="{{ route('member.add') }}" 
                            class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>Thêm thành viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a 
                            href="{{ route('member.list') }}" 
                            class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>Danh sách thành viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Cài đặt 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a 
                            href="{{ route('setting.list') }}" 
                            class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>Cài đặt chung</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

    </div>

</aside>

<div class="modal fade" id="dialogLogout" tabindex="-1" role="dialog" aria-labelledby="dialogLogout"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogLogout">Xác nhận đăng xuất</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Phiên đăng nhập vẫn còn hạn, bạn có chắc muốn đăng xuất khỏi trang này.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger">

                    <a href="{{ route('admin.logout') }}" style="color: #fff;">
                        Đăng xuất
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
