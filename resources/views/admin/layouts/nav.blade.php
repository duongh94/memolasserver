<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="{{ secure_asset('images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ secure_asset('images/logo.png') }}" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fas fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left w-100">
                <div class="form-group w-100">
                    <form class="search-form w-100 d-flex mt-2">
                        <input class="form-control rounded-0 border-right-0" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ secure_asset('images/admin.jpg') }}" alt="User Avatar">
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>
                    <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
{{--                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>--}}
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
