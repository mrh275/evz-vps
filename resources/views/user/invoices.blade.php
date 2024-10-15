@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>Transactions</h3>
                        <p class="text-subtitle text-muted">Daftar seluruh transaksi yang pernah dilakukan.</p>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Daftar Transaksi
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Items</th>
                                    <th>Invoice Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trx as $item)
                                    <tr>
                                        <td>{{ $item->merchant_ref }}</td>
                                        <td>{{ $item->vpsPlan->name }}</td>
                                        <td>{{ $item->order_date }}</td>
                                        <td>
                                            @if ($item->status == 'unpaid')
                                                <span class="badge bg-warning">Unpaid</span>
                                            @elseif ($item->status == 'paid')
                                                <span class="badge bg-success">Paid</span>
                                            @else
                                                <span class="badge bg-danger">Exoired</span>
                                            @endif
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
