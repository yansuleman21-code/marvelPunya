@extends('layouts.app')
@section('content')
<h2>Data Transaksi</h2>
<a href="{{ route('transaksi.create') }}">Kendaraan Masuk</a>
<table border="1">
    <tr>
        <th>No</th><th>No Polisi</th><th>Area</th><th>Masuk</th><th>Keluar</th><th>Biaya</th><th>Aksi</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->kendaraan->no_polisi }}</td>
        <td>{{ $item->areaParkir->nama_area }}</td>
        <td>{{ $item->waktu_masuk }}</td>
        <td>{{ $item->waktu_keluar ?? '-' }}</td>
        <td>{{ $item->biaya ?? '-' }}</td>
        <td>
            @if(!$item->waktu_keluar)
            <form method="POST" action="{{ route('transaksi.update', $item->id) }}">
                @csrf @method('PUT')
                <button type="submit">Keluar</button>
            </form>
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection