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
                    <h1 class="auth-title">Sign Up</h1>
                    <p class="mb-5 auth-subtitle">Silahkan mendaftar terlebih dahulu!</p>

                    <form action="{{ url('register/attempt') }}" method="POST">
                        @csrf
                        <div class="mb-4 form-group position-relative has-icon-left">
                            <input type="email" name="email" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="mb-4 form-group position-relative has-icon-left">
                            <input type="text" name="name" class="form-control form-control-xl" placeholder="Your name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="mb-4 form-group position-relative has-icon-left">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="mb-4 form-group position-relative has-icon-left">
                            <input type="password" name="confirm_password" class="form-control form-control-xl" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="mt-5 shadow-lg btn btn-primary btn-block btn-lg">Sign Up</button>
                    </form>
                    <div class="mt-5 text-lg text-center fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="{{ url('login') }}" class="font-bold">Log
                                in</a>.</p>
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
        if ({{ session()->has('success') }} === 1) {
            Swal.fire({
                title: 'Registrasi berhasil!',
                text: "{{ session()->get('message') }}",
                icon: 'success',
                confirmButtonText: 'Tutup'
            }).then((confirm) => {
                if (confirm.isConfirmed) {
                    window.location.href = "{{ url('login') }}"
                }
            })
        }
    </script>
@endpush
