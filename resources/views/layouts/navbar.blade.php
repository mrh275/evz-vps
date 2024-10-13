<nav class="py-3 navbar fixed-top navbar-expand-lg bg-light">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ url('assets/img/EVZ-LOGO.png') }}" alt="Brand Logo" class="brand-logo" style="width: 128px; height: auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('vps') }}">VPS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary me-1" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ms-1" href="{{ url('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
