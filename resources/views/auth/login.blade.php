@extends('layouts.auth')

@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ url('') }}" class="align-items-center d-flex fw-bold">
                            <img src="{{ url('assets/img/EVZ-LOGO-AK-XS.png') }}" style="width: 42px; height: auto;" alt="Logo">
                            <span class="fs-3 ms-2 login-brand-text">Evariz Digital Solutions</span>
                        </a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="mb-5 auth-subtitle">Silahkan login terlebih dahulu!</p>
                    @if (session()->get('errorEmail'))
                        {{ dd(session()->get('errorEmail')) }}
                    @endif
                    <form action="{{ route('auth.login.attempt') }}" method="POST">
                        @csrf
                        <div class="mb-4 form-group position-relative has-icon-left">
                            <input type="email" name="email" class="form-control form-control-xl {{ session()->has('error') ? 'is-invalid' : '' }}" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="mb-4 form-group position-relative has-icon-left">
                            <input type="password" name="password" class="form-control form-control-xl {{ session()->has('error') ? 'is-invalid' : '' }}" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="show-password">
                            <label class="text-gray-600 form-check-label" for="show-password">
                                Show password
                            </label>
                        </div>
                        <button id="login-button" type="submit" class="mt-5 shadow-lg btn btn-primary btn-block btn-lg">Log in</button>
                    </form>
                    <div class="mt-5 text-lg text-center fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="{{ url('register') }}" class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        if ({{ session()->has('error') }} === 1) {
            Swal.fire({
                title: 'Login failed!',
                text: "{{ session()->get('message') }}",
                icon: 'danger',
                confirmButtonText: 'Close'
            })
        }
    </script>
@endpush
