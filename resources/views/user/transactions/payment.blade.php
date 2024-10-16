@extends('layouts.user-template')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="order-last col-12 col-md-6 order-md-1">
                        <h3>
                            TRX ID: {{ $trx->trx_id }}
                        </h3>
                    </div>
                    <div class="order-first col-12 col-md-6 order-md-2">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item">Orders</li>
                                <li class="breadcrumb-item active" aria-current="page">Payment Details</li>
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
                                        <h6>Payment Details</h6>
                                        <div class="row">
                                            <div class="col-7">
                                                Renewal {{ $trx->vpsPlan->name }}
                                            </div>
                                            <div class="col-5 text-end">
                                                {{ number_format($trx->item_price, 0) }} IDR
                                            </div>
                                        </div>
                                        <hr class="mx-0 mt-1 mb-2">
                                        <div class="row">
                                            <div class="col-7">
                                                Tax's Included (PPN 11%)
                                            </div>
                                            <div class="col-5 text-end">
                                                {{ number_format($trx->tax, 0) }} IDR
                                            </div>
                                        </div>
                                        <hr class="mx-0 mt-1 mb-2">
                                        <div class="row">
                                            <div class="col-7">
                                                Bank Fee
                                            </div>
                                            <div class="col-5 text-end">
                                                {{ number_format($trx->merchant_fee, 0) }} IDR
                                            </div>
                                        </div>
                                        <hr class="mx-0 my-2">
                                        <div class="row text-dark fw-semibold">
                                            <div class="col-7">
                                                Total Amounts
                                            </div>
                                            <div class="col-5 text-end">
                                                {{ number_format($trx->total_price, 0) }} IDR
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 my-2 row">
                                    <div class="col-12">
                                        <h6>Payment Methods</h6>
                                        <div class="row">
                                            <div class="col-3 d-flex justify-content-center align-items-center">
                                                <div class="p-1 text-center border card">
                                                    <img src="{{ url('assets/img/bank/' . $trx->va_code . '.png') }}" alt="{{ $trx->va_code }}" width="90px">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex flex-column justify-content-start">
                                                <p>VA Number: {{ $trx->payment_code }}</p>
                                                <p>Valid until {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $trx->due_date)->format('F j, Y, H:i') }} WIB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-2 row">
                                    <div class="col-12 d-flex align-items-center justify-content-end">
                                        <span class="mx-2">Download your Invoice here</span>
                                        <a href="{{ url('user/order/invoice/' . $trx->trx_id) }}" target="_blank" class="btn btn-primary icon icon-left">
                                            <i class="fas fa-file-pdf"></i>
                                            Invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="p-2 card">
                            <div class="p-2 card-title">
                                <h5>Payment Instructions</h5>
                            </div>
                            <div class="px-0 card-body">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <i class="position-relative bi bi-phone-fill" style="top: -3px"></i>
                                                <span class="mx-2">Mobile Banking</span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Open your Mobile Banking app</li>
                                                    <li>Select Payment/Transfer</li>
                                                    <li>Select Virtual Account</li>
                                                    <li>Input your payment VA <strong>{{ $trx->payment_code }}</strong></li>
                                                    <li>If the amount is not automatically filled, fill it manually {{ number_format($trx->total_price, 0) }}</li>
                                                    <li>Confirm your payment</li>
                                                    <li>Fill your Mobile Banking PIN</li>
                                                    <li>Transaction Completed</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <i class="position-relative bi bi-globe" style="top: -3px"></i>
                                                <span class="mx-2">Internet Banking</span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Open your Internet Banking app</li>
                                                    <li>Select Payment/Transfer</li>
                                                    <li>Select Virtual Account</li>
                                                    <li>Input your payment VA <strong>{{ $trx->payment_code }}</strong></li>
                                                    <li>If the amount is not automatically filled, fill it manually {{ number_format($trx->total_price, 0) }}</li>
                                                    <li>Confirm your payment</li>
                                                    <li>Fill your Mobile Banking PIN/PASS Code</li>
                                                    <li>Transaction Completed</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                <i class="position-relative bi bi-credit-card-fill" style="top: -3px"></i>
                                                <span class="mx-2">ATM</span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Insert your ATM card</li>
                                                    <li>Select Payment/Transfer</li>
                                                    <li>Select Virtual Account</li>
                                                    <li>Input your payment VA <strong>{{ $trx->payment_code }}</strong></li>
                                                    <li>If the amount is not automatically filled, fill it manually {{ number_format($trx->total_price, 0) }}</li>
                                                    <li>Confirm your payment</li>
                                                    <li>Fill your ATM Card PIN</li>
                                                    <li>Transaction Completed</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-12">
                                <div class="gap-2 d-grid">
                                    <button class="btn btn-primary" id="check-payment" type="button">Check Payment Status</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const checkPayment = document.getElementById('check-payment');
        checkPayment.addEventListener("click", function() {
            fetch("{{ route('user.checkPayment', $trx->trx_id) }}")
                .then(response => response.json())
                .then(data => {
                    Swal.fire({
                        title: 'Checking your payment status...',
                        timer: 2000,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    }).then((dismiss) => {
                        if (data.status === 'paid') {
                            Swal.fire({
                                title: 'Payment Status',
                                text: 'Pembayaran Anda telah diterima',
                                icon: 'success',
                                confirmButtonText: 'Tutup'
                            }).then((confirm => {
                                if (confirm) {
                                    window.location.href = "{{ route('user.services') }}"
                                }
                            }))
                        } else if (data.status === 'unpaid') {
                            Swal.fire({
                                title: 'Payment Status',
                                text: 'Pembayaran Anda belum diterima. Silahkan lakukan pembayaran terlebih dahulu',
                                icon: 'warning',
                                confirmButtonText: 'Tutup'
                            })
                        } else {
                            Swal.fire({
                                title: 'Payment Status',
                                text: 'Transaksi tidak ditemukan. Silahkan membuat transaksi terlebih dahulu',
                                icon: 'error',
                                confirmButtonText: 'Tutup'
                            })
                        }
                    })
                });
        });
    </script>
@endpush
