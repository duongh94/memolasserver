<!doctype html>
<html lang="en">
    @include('frontend.layouts.head')
<body>
    <section class="container-fluid">
        @include('frontend.layouts.menu')
    </section>
    @yield('content')
    @include('frontend.layouts.footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ secure_asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
