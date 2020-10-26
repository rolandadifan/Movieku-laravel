<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="user-profile text-center pt-2">
        <div class="d-flex align-items-center justify-content-center pb-3">
            <div class="dropdown sub-dropdown">
                <button class="btn profile-pic rounded-circle position-relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="badge rounded-circle badge-success profile-dd text-center"><i class="fas fa-angle-down"></i></span>
                </button>
            </div>
        </div>
        <div class="profile-section pb-5">
            <p class="font-weight-light mb-0 font-18"> {{ Auth::user()->name }}</p>
            <span class="op-7 font-14">ADMIN</span>
        </div>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"><span class="hide-menu">Pages</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('admin.index')}}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('profile.index')}}" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('movie.create')}}" aria-expanded="false">
                        <i data-feather="monitor" class="feather-icon"></i>
                        <span class="hide-menu">Add Movie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('movie.index')}}" aria-expanded="false">
                        <i data-feather="grid" class="feather-icon"></i>
                        <span class="hide-menu">List Movie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('about.index')}}" aria-expanded="false">
                        <i data-feather="feather" class="feather-icon"></i>
                        <span class="hide-menu">About</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="starter-kit.html" aria-expanded="false">
                        <i data-feather="bell" class="feather-icon"></i>
                        <span class="hide-menu">Subscriber</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i data-feather="power" class="feather-icon"></i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>