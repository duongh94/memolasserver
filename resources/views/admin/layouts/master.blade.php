<!doctype html>
<html lang="en">
    @include('admin.layouts.header')
<body>

    @include('admin.layouts.sidebar')

    <div id="right-panel" class="right-panel">
        @include('admin.layouts.nav')
        @yield('content')
    </div>

    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script src="{{ secure_asset('js/admin/sidebar.js') }}"></script>
    @yield('js')
</body>
</html>
