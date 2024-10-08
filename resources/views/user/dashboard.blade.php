@extends('layouts.user-template')

@section('content')
    <div id="main-content">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>{{ $title }}</h3>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="px-4 card-body py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="mb-2 stats-icon blue">
                                                <i class="fas fa-server"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="font-semibold text-muted">Services</h6>
                                            <h6 class="mb-0 font-extrabold">2</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="px-4 card-body py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="mb-2 stats-icon green">
                                                <i class="fas fa-globe"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="font-semibold text-muted">Domains</h6>
                                            <h6 class="mb-0 font-extrabold">2</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="px-4 card-body py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="mb-2 stats-icon red">
                                                <i class="fas fa-ticket-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="font-semibold text-muted">Tickets</h6>
                                            <h6 class="mb-0 font-extrabold">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="px-4 card-body py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="mb-2 stats-icon purple">
                                                <i class="fas fa-receipt"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="font-semibold text-muted">Invoices</h6>
                                            <h6 class="mb-0 font-extrabold">2</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Server Information</h3>
                                </div>
                                <div class="card-body d-flex justify-content-evenly align-items-center">
                                    <button class="btn icon btn-secondary">
                                        <i class="fas fa-stop"></i>
                                    </button>
                                    <button class="btn icon btn-warning">
                                        <i class="fas fa-undo"></i>
                                    </button>
                                    <button class="btn icon btn-danger">
                                        <i class="fas fa-power-off"></i>
                                    </button>
                                    <button class="btn icon btn-light">
                                        <i class="fas fa-desktop"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="card" style="height: 210px">
                                <div class="card-header">
                                    <h4>Status</h4>
                                </div>
                                <div class="card-body">
                                    <p class="status-server">
                                        Status : <span class="badge bg-success">Online</span>
                                    </p>
                                    <p class="ip-server">
                                        IP Address : 192.168.1.1
                                    </p>
                                    <p class="host-server">
                                        Hostname : domain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card" style="height: 210px">
                                <div class="card-header">
                                    <h4>Server OS</h4>
                                </div>
                                <div class="card-body d-flex justify-content-start align-items-start">
                                    <img src="{{ url('assets/img/ubuntu-logo.svg') }}" style="width: 48px; height: fit-content" alt="Server OS Images" class="server-os-img">
                                    <p class="server-os-name ms-2">
                                        Ubuntu <br />
                                        ubuntu-20.04_64bit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card" style="height: 210px">
                                <div class="card-header">
                                    <h4>Data Center Location</h4>
                                </div>
                                <div class="card-body d-flex justify-content-start align-items-start">
                                    <img src="https://i.pinimg.com/originals/97/89/40/97894051af9cbb9511368c107f183efb.png" alt="Server OS Images" class="border server-os-img" style="width: fit-content; height: 42px">
                                    <p class="datacenter ms-2">
                                        Gd. Cyber 1 Lt. 8, Jakarta Selatan DKI Jakarta
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <div class="clearfix mb-0 footer text-muted">
            <div class="float-start">
                <p>{{ date('Y') }} &copy; EVZ</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://saugi.me">MRH</a></p>
            </div>
        </div>
    </footer>
@endsection
