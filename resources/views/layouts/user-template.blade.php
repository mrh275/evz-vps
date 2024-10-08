<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ url('assets/compiled/css/iconly.css') }}">
    <link rel="stylesheet" href="{{ url('assets/extensions/@fortawesome/fontawesome-free/css/all.min.css') }}">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div class="app" id="app">
        @include('layouts.components.sidebar')
        <div id="main" class='layout-navbar navbar-fixed'>
            @include('layouts.components.navbar')
            @yield('content')
        </div>
    </div>
    <script src="{{ url('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ url('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/compiled/js/app.js') }}"></script>
    <script src="{{ url('assets/static/js/pages/dashboard.js') }}"></script>
</body>

</html>
