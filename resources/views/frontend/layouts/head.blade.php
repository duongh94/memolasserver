<head>
    <meta charset="UTF-8">
    <title>Memolas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/indexCss.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/total.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/menu.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/homeCss.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/footer.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/total.css') }}">

    <link rel="icon" href="{{ secure_asset('images/logo2.png') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/frontend/iziModal.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/slick.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/frontend/slick-theme.css') }}">
    @yield('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
</head>
