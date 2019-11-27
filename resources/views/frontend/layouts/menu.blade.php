<div class="row">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('homepage')}}"><img src="{{secure_asset('images/logo2.png')}}" alt=""></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="material-icons menu">menu</i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse text" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item linkMenu">
                        <a class="nav-link active" href="{{route('homepage')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item linkMenu">
                        <a class="nav-link" href="{{route('about')}}">Giới thiệu</a>
                    </li>
                    <li class="nav-item linkMenu">
                        <a class="nav-link" href="{{route('blog')}}">Blog</a>
                    </li>
                    <li class="nav-item linkMenu">
                        <a class="nav-link" href="{{route('total')}}">Tính toán chi phí</a>
                    </li>
                    <li class="nav-item linkMenu">
                        <!-- <a class="nav-link" href="#">Chương trình<br /> cộng tác viên</a> -->
                    </li>
                    
                    <li class="nav-item login">
                        <!-- <div class="iconUser">
                            <a href="{{ route('login') }}"><i class="material-icons">person</i></a>

                        </div> -->
                        <div class="avata-after-login">
                            <img src="{{secure_asset('images/avata-main.png')}}" alt="">
                        </div>
                        <a class="nav-link" href="http://design.memolas.vn"> Memolab+</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>