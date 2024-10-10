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
                                                Renewal VPS Linux Power Max 3 Unmanaged 6 core RAM 8GB SSD 50GB 1Gbps Unlimited Uplink
                                            </li>
                                            <li class="list-group-item">
                                                Renewal Domain sman1rawamerta.sch.id
                                            </li>
                                            <li class="list-group-item">
                                                Comodo Positive SSL (DV)
                                            </li>
                                        </ul>
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
                                                    <input type="hidden" name="va_code" value="BRIVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/BRIVA.png') }}" alt="BRIVA" width="90px">
                                                        <span class="small">BRI Virtual Account</span>
                                                    </button>
                                                </form>
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="va_code" value="MANDIRIVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/MANDIRIVA.png') }}" alt="MANDIRIVA" width="90px">
                                                        <span class="small">Mandiri Virtual Account</span>
                                                    </button>
                                                </form>
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="va_code" value="BNIVA">
                                                    <button type="submit" class="p-1 border card">
                                                        <img src="{{ url('assets/img/bank/BNIVA.png') }}" alt="BNIVA" width="90px">
                                                        <span class="small">BNI Virtual Account</span>
                                                    </button>
                                                </form>
                                                <form action="{{ url('user/order/payment') }}" method="POST">
                                                    @csrf
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
                                            VPS Power Max 3
                                        </span>
                                    </div>
                                    <div class="col-5 text-end">
                                        5,675,676 IDR
                                    </div>
                                </div>
                                <div class="mb-2 row small">
                                    <div class="col-7">
                                        <span class="text-dark fw-semibold">
                                            Domain sman1rawamerta.sch.id
                                        </span>
                                    </div>
                                    <div class="col-5 text-end">
                                        67,568 IDR
                                    </div>
                                </div>
                                <div class="mb-2 row small">
                                    <div class="col-7">
                                        <span class="text-dark fw-semibold">
                                            SSL
                                        </span>
                                    </div>
                                    <div class="col-5 text-end">
                                        193,694 IDR
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2 row small">
                                    <div class="col-7 text-dark fw-semibold">
                                        Tax's Included (PPN 11%)
                                    </div>
                                    <div class="col-5 text-end">
                                        653,062 IDR
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2 row small">
                                    <div class="col-7 text-dark fw-semibold">
                                        Total Amount
                                    </div>
                                    <div class="col-5 text-end">
                                        6,590,000 IDR
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
