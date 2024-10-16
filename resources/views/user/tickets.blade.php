@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>Tickets</h3>
                        <p class="text-subtitle text-muted">Daftar seluruh tiket laporan yang pernah dibuat.</p>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">
                            Daftar Tiket
                        </h5>
                        <a href="{{ route('user.issueTicket') }}" class="btn btn-primary">Buat Ticket</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Tickets Code</th>
                                    <th>Ticket Title</th>
                                    <th>Issued Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td>{{ $ticket->ticket_code }}</td>
                                        <td>{{ $ticket->title }}</td>
                                        <td>{{ $ticket->open_date }}</td>
                                        <td>{{ $ticket->close_date == null ? $ticket->close_date : 'Still Open' }}</td>
                                        <td>
                                            <span class="badge bg-primary">{{ ucwords($ticket->status) }}</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary icon">
                                                <i class="fas fa-print"></i>
                                            </button>
                                            <button class="btn btn-info icon">
                                                <i class="fas fa-undo"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
