<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    {{--@if(Auth::user()->image!='')--}}
                        {{--<img src="/uploads/{{ Auth::user()->image }}" class="user-image" alt="User Image">--}}
                    {{--@endif--}}
                    {{--<span class="hidden-xs">{{ Auth::user()->name }} {{ Auth::user()->last_name }} </span>--}}
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    {{--<li class="user-header">--}}
                        {{--@if(Auth::user()->image!='')--}}
                            {{--<img src="/uploads/{{ Auth::user()->image }}" class="img-circle" alt="User Image">--}}
                        {{--@endif--}}
                        {{--<p>--}}
                            {{--{{ Auth::user()->title }}--}}
                            {{--<small>Member since {{ Auth::user()->created_at->format('M Y') }}</small>--}}
                        {{--</p>--}}
                    {{--</li>--}}
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            {{--<a href="{{ route('users.edit', Auth::user()->id) }}" class="btn btn-primary btn-flat">Profile</a>--}}
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('logout') }}" class="btn btn-danger btn-flat">Log out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
