<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ url('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ url('assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ url('assets/compiled/css/auth.css') }}">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    @yield('content')
</body>

</html>
