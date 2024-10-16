<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/png">

    {{-- Section Invoices --}}
    @if ($activeMenu == 'services' || $activeMenu == 'domains' || $activeMenu == 'invoices' || $activeMenu == 'tickets')
        <link rel="stylesheet" href="{{ url('assets/extensions/simple-datatables/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/compiled/css/table-datatable.css') }}">
    @endif

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
    @if ($activeMenu == 'services' || $activeMenu == 'domains' || $activeMenu == 'tickets')
        <script src="{{ url('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
        <script src="{{ url('assets/static/js/pages/simple-datatables.js') }}"></script>
    @endif
    @if ($title == 'Invoice')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    @endif
    @stack('scripts')
</body>

</html>
