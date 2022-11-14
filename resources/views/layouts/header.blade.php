<!-- Right navbar links -->

@include('flash-message')&nbsp;
<a href="{{url('clear_cache')}}"  style="margin-left: 680px;" class="btn btn-success btn-sm mr-2">Cache Clear</a>

<ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
            <form class="form-inline">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>



    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>


    <!-- Profile Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">Welcome</span>
            <div class="dropdown-divider"></div>
            <a href="{{'myprofile'}}" class="dropdown-item">
                <i class="fas fa-user mr-2"></i> My Profile
                <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-key mr-2"></i> Change Password
                <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('logout')}}" onclick="return logout(event);" class="dropdown-item">
                <i class="fa fa-sign-out-alt mr-2"></i> Logout
                <span class="float-right text-muted text-sm"></span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <div class="dropdown-divider"></div>
        </div>
    </li>

{{--    <li>--}}
{{--        <a class="dropdown-item" href="{{route('logout')}}" onclick="return logout(event);">--}}
{{--     <span class="">--}}
{{--        <i class="fa fa-fw fa-sign-out"></i>Logout--}}
{{--     </span>--}}
{{--        </a>--}}

{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </li>--}}

    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>

</ul>

</nav>
<!-- /.navbar -->
<script type="text/javascript">
    function logout(event){
        event.preventDefault();
        var check = confirm("Do you really want to logout?");
        if(check){
            document.getElementById('logout-form').submit();
        }
    }
</script>
