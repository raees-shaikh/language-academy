<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>
                    {{-- <img src="" alt="homepage" class="dark-logo" />  --}}
                     {{-- <img src="" alt="homepage" class="light-logo" /> --}}
                </b>
                <span>
                     <img src="{{asset('img/logos/logo.svg')}}" width="260"  height="50" alt="homepage" class="dark-logo" /> 
                    <img src="{{asset('img/logos/logo.svg')}}" width="auto"  height="50" class="light-logo" alt="homepage" /> 
                </span> 
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> 
                    <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-menu"></i>
                    </a> 
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="hidden-md-down">Admin &nbsp;
                            <i class="fa fa-angle-down"></i>
                        </span> 
                    </a>

                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <a href="{{route('changePassword')}}" class="dropdown-item">
                            <i class= "fa fa-unlock-alt"></i> 
                            Change Password
                            <a href="/logout" class="dropdown-item">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        {{-- </a> --}}
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> 
                    <a href="/course" aria-expanded="true">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">View Courses</span>
                    </a>
                </li>
                <li> 
                    <a href="/testimonials" aria-expanded="true">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Testimonials</span>
                    </a>
                </li>
                <li> 
                    <a href="/gallery" aria-expanded="true">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Gallery</span>
                    </a>
                </li>
                {{-- <li> 
                    <a href="/course/create" aria-expanded="true">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Create Course</span>
                    </a>
                </li>                 --}}

                {{-- <li>
                    <a href="" aria-expanded="true">
                        <i class="ti-bookmark"></i>
                        <span>Subscription</span>
                    </a>
                </li>  --}}
                {{-- <li>
                    <a href="" aria-expanded="true">
                        <i class="ti-user"></i>
                        <span>Users</span>
                    </a>
                </li>  --}}
                {{-- <li>
                    <a href="" aria-expanded="true">
                        <i class="ti-desktop"></i>
                        <span>WebinarsWebinars</span>
                    </a>
                </li> 
                <li>
                    <a href="" aria-expanded="true">
                        <i class="ti-stats-up"></i>
                        <span>Trades</span>
                    </a>
                </li> 
                <li>
                    <a href="" aria-expanded="true">
                        <i class="ti-id-badge"></i>
                        <span>Admins</span>
                    </a>
                </li>  --}}
                {{-- <li>
                    <a href="">Cancelled Subscriptions</a>
                </li>  --}}

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>