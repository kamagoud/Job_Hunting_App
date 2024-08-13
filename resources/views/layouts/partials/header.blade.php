
<div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ URL::asset('/assets/img/logo.svg') }}" alt="Logo">
        </a>
        <a href="{{ route('dashboard') }}" class="logo collapse-logo">
            <img src="{{ URL::asset('/assets/img/collapse-logo.svg') }}" alt="Logo">
        </a>
        <a href="{{ route('dashboard') }}" class="logo2">
            <img src="{{ URL::asset('/assets/img/logo2.png') }}" width="40" height="40" alt="Logo">
        </a>
    </div>
    <!-- /Logo -->

   <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Title -->
    <div class="page-title-box">
        {{-- <h3>Dreams Technologies</h3> --}}
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">
        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa-regular fa-bell"></i> <span class="badge rounded-pill">1</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="{{ url('activities') }}">
                                <div class="chat-block d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                            alt="User Image">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added new
                                            task
                                            <span class="noti-title">Patient appointment booking</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="{{ url('activities') }}">View all Notifications</a>
                </div>
            </div>
        </li>
        <!-- /Notifications -->

        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{ URL::asset('/assets/img/avatar/avatar-27.jpg') }}"
                        alt="User Image">
                    <span class="status online"></span></span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <a class="dropdown-item" href="{{ route('api-tokens.index') }}">API Tokens</a>
                @endif


                <a class="dropdown-item" href="{{ url('settings') }}">Settings</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button  class="dropdown-item" >
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="fa-solid fa-ellipsis-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>
            <a class="dropdown-item" href="{{ url('settings') }}">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button  class="dropdown-item" >
                    Logout
                </button>
            </form>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>
