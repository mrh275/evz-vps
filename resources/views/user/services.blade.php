@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>Services</h3>
                        <p class="text-subtitle text-muted">Daftar seluruh layanan yang pernah di sewa.</p>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Daftar Layanan
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Items</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $item)
                                    <tr>
                                        <td>{{ $item->merchant_ref }}</td>
                                        <td>{{ $item->item_name }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>{{ $item->expire_date }}</td>
                                        <td>
                                            @if ($item->status == 'active')
                                                <span class="badge bg-success">Active</span>
                                            @elseif ($item->status == 'inactive')
                                                <span class="badge bg-secondary">Inactive</span>
                                            @else
                                                <span class="badge bg-danger">Expired</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('user.invoice', $item->trx_id) }}" class="btn btn-secondary icon" target="_blank">
                                                <i class="fas fa-print"></i>
                                            </a>
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
