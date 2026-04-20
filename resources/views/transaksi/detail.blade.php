@extends('layouts.app')

@section('content')
<style>
    /* Custom Style untuk Detail Transaksi */
    .invoice-card {
        border: none;
        border-radius: 15px;
    }
    .invoice-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px 15px 0 0 !important;
        padding: 2rem;
    }
    .status-badge {
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
    }
    .table thead th {
        background-color: #f8f9fa;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
        border-bottom: 2px solid #dee2e6;
    }
    .total-section {
        background-color: #fcfcfc;
        border-radius: 10px;
        padding: 1.5rem;
    }
    @media print {
        .btn, .sidebar, .navbar { display: none !important; }
        .card { border: none !important; }
        .invoice-header { color: black !important; background: none !important; padding: 0 !important; }
    }
</style>

<div class="container py-5">
    <div class="card shadow invoice-card">
        <div class="card-header invoice-header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="fw-bold mb-0">INVOICE</h2>
                <small class="opacity-75">Nomor: #{{ $transaction->invoice_number }}</small>
            </div>
            <div class="text-end">
                <span class="badge bg-white text-dark status-badge shadow-sm">
                    {{ $transaction->status }}
                </span>
            </div>
        </div>
        
        <div class="card-body p-4">
            <div class="row mb-5">
                <div class="col-sm-6">
                    <p class="text-muted mb-2">Ditagihkan kepada:</p>
                    <h5 class="fw-bold">{{ $transaction->customer->name }}</h5>
                    <p class="text-muted small">
                        {{ $transaction->customer->address }}<br>
                        {{ $transaction->customer->phone }}
                    </p>
                </div>
                <div class="col-sm-6 text-sm-end">
                    <p class="text-muted mb-2">Tanggal Transaksi:</p>
                    <h5 class="fw-bold">{{ $transaction->created_at->format('d F Y') }}</h5>
                    <p class="text-muted small">Metode Pembayaran: {{ $transaction->payment_method ?? 'Transfer Bank' }}</p>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Item / Produk</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaction->details as $item)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ $item->product->name }}</div>
                                <small class="text-muted">SKU: {{ $item->product->sku }}</small>
                            </td>
                            <td class="text-center">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end fw-bold">Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row justify-content-end mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="total-section">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span>Rp{{ number_format($transaction->total_amount, 0, ',', '.') }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Pajak (0%)</span>
                            <span>Rp0</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Total Akhir</span>
                            <h4 class="fw-bold text-primary mb-0">Rp{{ number_format($transaction->total_amount, 0, ',', '.') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer bg-light p-4 d-flex justify-content-between">
            <a href="{{ route('transactions.index') }}" class="btn btn-outline-secondary px-4">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <button onclick="window.print()" class="btn btn-primary px-4">
                <i class="bi bi-printer"></i> Cetak PDF / Invoice
            </button>
        </div>
    </div>
</div>
@endsection