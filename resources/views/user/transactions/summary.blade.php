@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>
                            Order ID: 6386273
                        </h3>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item">Orders</li>
                                <li class="breadcrumb-item active" aria-current="page">Summary</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="p-4 card">
                            <div class="p-0 card-body">
                                <div class="my-2 row">
                                    <div class="col-12">
                                        <h6>Order Details</h6>
                                        <ul class="list-group fw-semibold">
                                            <li class="list-group-item">
                                                Renewal {{ $vpsPlan->name }} Linux Unmanaged {{ $vpsPlan->cpu }} RAM {{ $vpsPlan->ram }} {{ $vpsPlan->storage }} {{ $vpsPlan->bandwidth }} Unlimited Uplink
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="my-2 row">
                                        <div class="col-12">
                                            <label for="item-duration">
                                                <h6>Select duration</h6>
                                            </label>
                                            <select name="item-duration" id="item-duration" class="form-select" onchange="changeDurationPrice(event)">
                                                <option value="">Pilih :</option>
                                                <option value="1">1 bulan</option>
                                                <option value="3">3 bulan</option>
                                                <option value="6">6 bulan</option>
                                                <option value="12" selected>12 bulan</option>
                                                <option value="24">24 bulan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 my-2 row">
                                    <div class="col-12">
                                        <h6>Payment Methods</h6>
                                        <p>Choose your payment method</p>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-evenly">
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="vps_plan" value="{{ Request::segment(4) }}">
                                                    <input type="hidden" name="item_duration" value="12">
                                                    <input type="hidden" name="va_code" value="BRIVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/BRIVA.png') }}" alt="BRIVA" width="90px">
                                                        <span class="small">BRI Virtual Account</span>
                                                    </button>
                                                </form>
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="vps_plan" value="{{ Request::segment(4) }}">
                                                    <input type="hidden" name="item_duration" value="12">
                                                    <input type="hidden" name="va_code" value="MANDIRIVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/MANDIRIVA.png') }}" alt="MANDIRIVA" width="90px">
                                                        <span class="small">Mandiri Virtual Account</span>
                                                    </button>
                                                </form>
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="vps_plan" value="{{ Request::segment(4) }}">
                                                    <input type="hidden" name="item_duration" value="12">
                                                    <input type="hidden" name="va_code" value="BNIVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/BNIVA.png') }}" alt="BNIVA" width="90px">
                                                        <span class="small">BNI Virtual Account</span>
                                                    </button>
                                                </form>
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="vps_plan" value="{{ Request::segment(4) }}">
                                                    <input type="hidden" name="item_duration" value="12">
                                                    <input type="hidden" name="va_code" value="BCAVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/BCAVA.png') }}" alt="BCAVA" width="90px">
                                                        <span class="small">BCA Virtual Account</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="p-2 card">
                            <div class="p-2 card-title">
                                <h5>Summary</h5>
                            </div>
                            <div class="p-2 card-body">
                                <p class="text-muted">
                                    Order Summary
                                </p>
                                <div class="mb-2 row small">
                                    <div class="col-7">
                                        <span class="text-dark fw-semibold">
                                            {{ $vpsPlan->name }}
                                        </span>
                                    </div>
                                    <div class="col-5 text-end">
                                        <span id="vps-amount"></span> IDR
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2 row small">
                                    <div class="col-7 text-dark fw-semibold">
                                        Tax's Included (PPN 11%)
                                    </div>
                                    <div class="col-5 text-end">
                                        <span id="tax-amount"></span> IDR
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2 row small">
                                    <div class="col-7 text-dark fw-semibold">
                                        Total Amount
                                    </div>
                                    <div class="col-5 text-end">
                                        <span id="total-amount"></span> IDR
                                    </div>
                                </div>
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
        const vpsPrice = {{ $vpsPlan->price }};
        const vpsAmount = document.getElementById('vps-amount');
        const taxAmount = document.getElementById('tax-amount');
        const totalAmount = document.getElementById('total-amount');
        const itemDurations = document.querySelectorAll('input[name="item_duration"]');
        vpsAmount.innerHTML = (vpsPrice * 12).toLocaleString();
        taxAmount.innerHTML = (vpsPrice * 12 * 0.11).toLocaleString();
        totalAmount.innerHTML = (vpsPrice * 12 + vpsPrice * 12 * 0.11).toLocaleString();

        function changeDurationPrice(event) {
            let duration = event.target.value;
            vpsAmount.innerHTML = (vpsPrice * duration).toLocaleString();
            taxAmount.innerHTML = (vpsPrice * duration * 0.11).toLocaleString();
            totalAmount.innerHTML = (vpsPrice * duration + vpsPrice * duration * 0.11).toLocaleString();
            itemDurations.forEach(item => {
                item.value = duration;
            });
        };
    </script>
@endpush
