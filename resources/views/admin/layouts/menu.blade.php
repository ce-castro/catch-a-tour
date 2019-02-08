<ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ asset('/admin') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/categories") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Categories</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/categories") class="active" @endif>
                <a href="{{ asset('/admin/categories') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/categories/create") class="active" @endif>
                <a href="{{ asset('/admin/categories/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/subcategories") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Sub - Categories</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/subcategories") class="active" @endif>
                <a href="{{ asset('/admin/subcategories') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/subcategories/create") class="active" @endif>
                <a href="{{ asset('/admin/subcategories/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/sliders") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-sliders" aria-hidden="true"></i> <span>Home Slider</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/sliders") class="active" @endif>
                <a href="{{ asset('/admin/sliders') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/sliders/create") class="active" @endif>
                <a href="{{ asset('/admin/sliders/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/pages") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Pages</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/pages") class="active" @endif>
                <a href="{{ asset('/admin/pages') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/pages/create") class="active" @endif>
                <a href="{{ asset('/admin/pages/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/tours") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>Tours</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/tours") class="active" @endif>
                <a href="{{ asset('/admin/tours') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/tours/create") class="active" @endif>
                <a href="{{ asset('/admin/tours/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/pdfconfirmations") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>PDF Templates</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/pdfconfirmations") class="active" @endif>
                <a href="{{ asset('/admin/pdfconfirmations') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/pdfconfirmations/create") class="active" @endif>
                <a href="{{ asset('/admin/pdfconfirmations/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/confirmations") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>Confirmations</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/confirmations") class="active" @endif>
                <a href="{{ asset('/admin/confirmations') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/confirmations/create") class="active" @endif>
                <a href="{{ asset('/admin/confirmations/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>

    {{--@if (Auth::user()->role_id == 1)--}}
    <li class="treeview @if(strpos($_SERVER['REDIRECT_URL'], "/admin/users") !== false) active menu-open @endif">
        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/users") class="active" @endif>
                <a href="{{ asset('/admin/users') }}"><i class="fa fa-list" aria-hidden="true"></i> View</a>
            </li>
            <li @if($_SERVER['REDIRECT_URL'] == "/admin/users/create") class="active" @endif>
                <a href="{{ asset('/admin/users/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </li>
        </ul>
    </li>
    {{--@endif--}}

    {{--@if (Auth::user()->role_id == 1)--}}
        <li @if($_SERVER['REDIRECT_URL'] == "/admin/settings/") class="active" @endif">
            <a href="{{ asset('/admin/settings/1/edit') }}" href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span>Site Settings</span></a>
        </li>
    {{--@endif--}}

</ul>