<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        {{--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
        {{--style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Tours</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{--<li class="nav-item">--}}
                    {{--<a href="pages/widgets.html" class="nav-link">--}}
                        {{--<i class="nav-icon fa fa-th"></i>--}}
                        {{--<p>--}}
                            {{--Widgets--}}
                            {{--<span class="right badge badge-danger">New</span>--}}
                        {{--</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="nav-item has-treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/categories") !== false) active menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>Categories
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link  @if($_SERVER['REDIRECT_URL'] == "/admin/categories") active @endif">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View</p>
                            </a>
                        </li>
                        <li class="nav-item @if($_SERVER['REDIRECT_URL'] == "/admin/categories/create") active @endif">
                            <a href="pages/forms/general.html" class="nav-link @if($_SERVER['REDIRECT_URL'] == "/admin/categories/create") active @endif">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--<li class="nav-header">EXAMPLES</li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>