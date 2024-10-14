@extends('layouts.template')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="container py-5">
                <div class="py-5 row flex-lg-row-reverse align-items-center">
                    <div class="col-10 col-lg-6">
                        <img src="{{ url('assets/img/vps-hero-md.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-3 display-5 fw-bold lh-1">Deploy and manage your app with powerfull VPS</h1>
                        <p class="lead">
                            Evariz Digital Solusindo provides a powerful VPS with high performance and affordable price. Deploy and manage your app with our VPS. We provide 24/7 support for you. Get started now!
                        </p>
                        <div class="gap-2 d-grid d-md-flex justify-content-md-start">
                            <button type="button" class="px-4 btn btn-primary btn-lg me-md-2">Getting Started</button>
                            <button type="button" class="px-4 btn btn-outline-secondary btn-lg">View Plans</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 pb-5 row">
            <h2 class="my-5 text-center fw-bold fs-1">
                VPS Plans
            </h2>
            @foreach ($vpsPlan as $vps)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-title">
                            <h3 class="my-4 text-center fw-semibold">{{ $vps->name }}</h3>
                        </div>
                        <div class="card-body">
                            <ul class="px-5 mx-4 power-1 text-dark fw-semibold">
                                <li>
                                    {{ $vps->cpu }}
                                </li>
                                <li>
                                    {{ $vps->ram }}
                                </li>
                                <li>
                                    {{ $vps->storage }}
                                </li>
                                <li>
                                    {{ $vps->bandwidth }}
                                </li>
                                <li>
                                    1 IP Public
                                </li>
                                <li>
                                    100 Mbps Uplink
                                </li>
                                <li>99% Uptime</li>
                            </ul>
                            <div class="pt-4 row">
                                <div class="text-center col-12">
                                    <h3 class="text-dark fw-bold">{{ number_format($vps->price, 0, ',', '.') }} IDR/month</h3>
                                </div>
                            </div>
                            <div class="pt-3 row">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-lg" id="vps{{ $vps->id }}">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="py-4 row">
            <div class="col-12 col-lg-6" id="footer-left">
                Evariz Digital Solusindo &copy; {{ date('Y') }}. All rights reserved.
            </div>
            <div class="col-12 col-lg-6 text-end" id="footer-right">
                Made with &hearts; by MRH
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const vps1 = document.getElementById('vps1');
        const vps2 = document.getElementById('vps2');
        const vps3 = document.getElementById('vps3');

        vps1.addEventListener('click', function() {
            sessionStorage.setItem('vps', 1);
            if ("{{ session()->has('user') }}" == "") {
                window.location.href = "{{ route('auth.login') }}";
            } else {
                window.location.href = "{{ route('user.order', 1) }}";
            }
        })

        vps2.addEventListener('click', function() {
            sessionStorage.setItem('vps', 2);
            if ("{{ session()->has('user') }}" == "") {
                window.location.href = "{{ route('auth.login') }}";
            } else {
                window.location.href = "{{ route('user.order', 2) }}";
            }
        })
        vps3.addEventListener('click', function() {
            sessionStorage.setItem('vps', 3);
            if ("{{ session()->has('user') }}" == "") {
                window.location.href = "{{ route('auth.login') }}";
            } else {
                window.location.href = "{{ route('user.order', 3) }}";
            }
        })
    </script>
@endpush
