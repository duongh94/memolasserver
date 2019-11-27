<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('posts.index') }}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Bài viết</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-book"></i><a href="{{ route('posts.index') }}">Danh sách bài viết</a></li>
                        <li><i class="fas fa-plus-circle"></i><a href="{{ route('posts.create') }}">Tạo bài viết</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>
