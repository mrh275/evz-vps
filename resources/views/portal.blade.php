@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container py-5">
                <div class="py-5 row flex-lg-row-reverse align-items-center">
                    <div class="col-10 col-lg-6">
                        <img src="{{ url('assets/img/vps-hero-md.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-3 display-5 fw-bold lh-1">Responsive left-aligned hero with image</h1>
                        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="gap-2 d-grid d-md-flex justify-content-md-start">
                            <button type="button" class="px-4 btn btn-primary btn-lg me-md-2">Getting Started</button>
                            <button type="button" class="px-4 btn btn-outline-secondary btn-lg">View Plans</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5 pt-5 row">
            <h2 class="my-5 text-center fw-bold fs-1">
                VPS Plans
            </h2>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-title">
                        <h3 class="my-4 text-center fw-semibold">VPS Power Max 1</h3>
                    </div>
                    <div class="card-body">
                        <ul class="px-5 mx-4 power-1 text-dark fw-semibold">
                            <li>
                                CPU 2 core
                            </li>
                            <li>
                                2 GB RAM
                            </li>
                            <li>
                                50 GB SSD
                            </li>
                            <li>
                                1 TB Bandwidth
                            </li>
                            <li>
                                1 IP Public
                            </li>
                            <li>
                                100 Mbps Uplink
                            </li>
                            <li>99% Uptime</li>
                        </ul>

                        <div class="pt-5 row">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg" id="vps1">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-title">
                        <h3 class="my-4 text-center fw-semibold">VPS Power Max 2</h3>
                    </div>
                    <div class="card-body">
                        <ul class="px-5 mx-4 power-1 text-dark fw-semibold">
                            <li>
                                CPU 4 core
                            </li>
                            <li>
                                4 GB RAM
                            </li>
                            <li>
                                80 GB SSD
                            </li>
                            <li>
                                1 TB Bandwidth
                            </li>
                            <li>
                                1 IP Public
                            </li>
                            <li>
                                100 Mbps Uplink
                            </li>
                            <li>99% Uptime</li>
                        </ul>

                        <div class="pt-5 row">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg" id="vps2">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-title">
                        <h3 class="my-4 text-center fw-semibold">VPS Power Max 3</h3>
                    </div>
                    <div class="card-body">
                        <ul class="px-5 mx-4 power-1 text-dark fw-semibold">
                            <li>
                                CPU 6 core
                            </li>
                            <li>
                                8 GB RAM
                            </li>
                            <li>
                                100 GB SSD
                            </li>
                            <li>
                                1 TB Bandwidth
                            </li>
                            <li>
                                1 IP Public
                            </li>
                            <li>
                                100 Mbps Uplink
                            </li>
                            <li>99% Uptime</li>
                        </ul>

                        <div class="pt-5 row">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg" id="vps3">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                window.location.href = "{{ route('user.order') }}";
            }
        })

        vps2.addEventListener('click', function() {
            sessionStorage.setItem('vps', 2);
            if ("{{ session()->has('user') }}" == "") {
                window.location.href = "{{ route('auth.login') }}";
            } else {
                window.location.href = "{{ route('user.order') }}";
            }
        })
        vps3.addEventListener('click', function() {
            sessionStorage.setItem('vps', 3);
            if ("{{ session()->has('user') }}" == "") {
                window.location.href = "{{ route('auth.login') }}";
            } else {
                window.location.href = "{{ route('user.order') }}";
            }
        })
    </script>
@endpush
