@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>Create Tickets</h3>
                        <p class="text-subtitle text-muted">Daftar seluruh tiket laporan yang pernah dibuat.</p>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item">Ticket</li>
                                <li class="breadcrumb-item active" aria-current="page">Create Ticket</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Form Tiket Kendala
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.ticket.store') }}" method="post" class="form form-vertical">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama</label>
                                            <div class="position-relative">
                                                <input type="text" name="name" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative">
                                                <input type="email" name="email" class="form-control" placeholder="Email" id="email-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Judul Ticket</label>
                                            <div class="position-relative">
                                                <input type="text" name="ticketTitle" class="form-control" placeholder="Judul ticket" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-ticket-perforated-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 form-group">
                                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                            <textarea class="form-control" name="ticketDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="mb-1 btn btn-primary me-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
