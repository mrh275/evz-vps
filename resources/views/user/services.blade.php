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
                                <tr>
                                    <td>INV/EVZ/VPS-PMX/X/2024</td>
                                    <td>VPS Power Max 2</td>
                                    <td>09 Oktober 2024</td>
                                    <td>08 Oktober 2025</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
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
                                <tr>
                                    <td>INV/EVZ/VPS-PMX/X/2024</td>
                                    <td>VPS Power Max 2</td>
                                    <td>09 Oktober 2024</td>
                                    <td>08 Oktober 2025</td>
                                    <td>
                                        <span class="badge bg-danger">Expired</span>
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
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
