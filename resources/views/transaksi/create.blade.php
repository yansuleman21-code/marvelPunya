@extends('layouts.app') @section('content')
<div class="container">
    <h2>Catat Kendaraan Masuk</h2>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
    </form>
</div>
@endsection