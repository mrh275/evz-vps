@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>
                            Invoice Order ID: 6386273
                        </h3>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item">Orders</li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="my-3 row">
                <div class="col-12">
                    <button class="btn btn-primary icon icon-left" onclick="cetakInvoice()">
                        <i class="fas fa-file-pdf"></i>
                        Download Invoice
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="card" id="invoice" style="width: 794px; height: auto;">
                        <div class="card-body">
                            <div class="paid-status position-relative">
                                @if ($paymentStatus)
                                    <img src="{{ url('assets/img/PAID-THUMB.png') }}" alt="Paid Status" class="position-absolute" style="top: -24px; right:-24px;">
                                @else
                                    <img src="{{ url('assets/img/UNPAID-THUMB.png') }}" alt="Paid Status" class="position-absolute" style="top: -24px; right:-24px;">
                                @endif
                            </div>
                            <div class="pt-5 ps-4 row">
                                <div class="col-12">
                                    <img src="{{ url('assets/img/invoice-logo-xs.png') }}" alt="Invoice-Brand" class="brand-invoice" style="width:180px">
                                </div>
                            </div>
                            <div class="mt-2 row pe-4 me-5">
                                <div class="col-12 text-end pe-0">
                                    <p class="pb-0 mb-1 brand-name fs-3 fw-semibold">Evariz Digital Media</p>
                                    <span class="brand-desc">
                                        <span>Kp. Ciberes RT. 04 RW. 02 Desa Ciberes</span>
                                        <br>
                                        <span>Kec. Patokbeusi - Subang, 41263</span>
                                    </span>
                                </div>
                            </div>

                            <div class="mt-3 row">
                                <div class="col-1"></div>
                                <div class="px-2 py-1 col-10" style="background-color: #efefef">
                                    <div class="container">
                                        <h5 class="text-dark">Invoice #{{ $trx->merchant_ref }}</h5>
                                        <span class="text-dark">Invoice date: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $trx->order_date)->format('F j, Y, H:i') }} WIB</span>
                                        <br>
                                        <span class="text-dark">Due date: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $trx->due_date)->format('F j, Y, H:i') }} WIB</span>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-1"></div>
                                <div class="px-2 col-10">
                                    <p class="text-dark">
                                        <span class="fw-bold fs-5">Invoiced To</span> <br>
                                        SMAN 1 RAWAMERTA <br>
                                        Jl. Garunggung - Panyingkiran Kec. Rawamerta <br>
                                        Karawang, Jawa Barat, 41382 <br>
                                        Indonesia
                                    </p>
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="table-responsive">
                                        <table class="table mb-0 border-2 table-bordered border-secondary">
                                            <thead style="background-color: #efefef;">
                                                <tr class="text-center">
                                                    <th>NAME</th>
                                                    <th>RATE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark fw-semibold">
                                                        {{ $trx->vpsPlan->name }} <br>
                                                        Region: Bogor <br>
                                                        CPU: {{ $trx->vpsPlan->cpu }} <br>
                                                        RAM: {{ $trx->vpsPlan->ram }} <br>
                                                        Storage: {{ $trx->vpsPlan->storage }} <br>
                                                        Operating System: ubuntu-22.04-x86_64
                                                    </td>
                                                    <td class="text-end text-dark">{{ number_format($trx->total_price * 0.11 + $trx->total_price, 0) }} IDR</td>
                                                </tr>
                                            </tbody>
                                            <tfoot style="background-color: #efefef" class="fw-bold text-end">
                                                <tr>
                                                    <td class="text-dark">
                                                        Total Amount (Tax's Included)
                                                    </td>
                                                    <td class="text-dark">
                                                        {{ number_format($trx->total_price * 0.11 + $trx->total_price, 0) }} IDR
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="table-responsive">
                                        <table class="table mb-0 overflow-hidden align-top border-2 border-dark table-bordered border-secondary">
                                            <tbody class="overflow-hidden">
                                                <tr class="overflow-hidden">
                                                    <td class="text-dark small fw-semibold col-6">
                                                        <span class="italic">
                                                            Payment only accepted via bank transfer to the following virtual account:
                                                        </span>
                                                        <br>
                                                        <br>
                                                        <span class="text-dark">
                                                            Bank: {{ trim($trx->va_code, 'VA') }} Virtual Account<br>
                                                            Account Number: 1234567890 <br>
                                                            Account Name: Evariz Digital Media
                                                        </span>
                                                    </td>
                                                    <td class="overflow-hidden align-top text-dark fw-bold col-6">
                                                        <div class="position-relative row small border-1 border-bottom border-dark" style="top: -35px">
                                                            <div class="col-6">
                                                                Sub Amount
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                {{ number_format($trx->total_price, 0) }} IDR
                                                            </div>
                                                        </div>
                                                        <div class="position-relative row small border-1 border-bottom border-dark" style="top: -35px">
                                                            <div class="col-6">
                                                                VAT (11%)
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                {{ number_format($trx->total_price * 0.11, 0) }} IDR
                                                            </div>
                                                        </div>
                                                        <div class="position-relative row small border-1 border-bottom border-dark" style="top: -35px">
                                                            <div class="col-6">
                                                                Total Amount
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                {{ number_format($trx->total_price * 0.11 + $trx->total_price, 0) }} IDR
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-1"></div>
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
        function cetakInvoice() {
            let element = document.getElementById('invoice');
            document.documentElement.scrollTop = 0;

            let option = {
                margin: [0, 0, 0, 0],
                filename: 'invoice.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'A4',
                    orientation: 'portrait'
                }
            };

            html2pdf().set(option).from(element).save();
        }
    </script>
@endpush
