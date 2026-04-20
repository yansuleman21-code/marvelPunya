@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-extrabold text-slate-800">Riwayat Transaksi</h2>
    <a href="{{ route('transaksi.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-semibold transition shadow-md shadow-blue-200 flex items-center">
        <span class="mr-2">+</span> Kendaraan Masuk
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 text-sm uppercase tracking-wider">
            <tr>
                <th class="px-6 py-4 font-medium">No Polisi</th>
                <th class="px-6 py-4 font-medium">Area</th>
                <th class="px-6 py-4 font-medium">Waktu Masuk</th>
                <th class="px-6 py-4 font-medium">Status / Biaya</th>
                <th class="px-6 py-4 font-medium text-right">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach ($data as $item)
            <tr class="hover:bg-slate-50 transition">
                <td class="px-6 py-4 font-bold text-slate-700">{{ $item->kendaraan->no_polisi ?? '-' }}</td>
                <td class="px-6 py-4 text-slate-600">
                    <span class="bg-slate-100 px-2 py-1 rounded text-xs font-medium">{{ $item->areaParkir->nama_area ?? '-' }}</span>
                </td>
                <td class="px-6 py-4 text-sm text-slate-500">{{ $item->waktu_masuk }}</td>
                <td class="px-6 py-4">
                    @if($item->waktu_keluar)
                        <span class="text-green-600 font-bold">Rp {{ number_format($item->biaya, 0, ',', '.') }}</span>
                    @else
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-xs font-bold animate-pulse">Parkir Aktif</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('transaksi.show', $item->id) }}" class="text-slate-400 hover:text-blue-600 p-1">👁️</a>
                        @if(!$item->waktu_keluar)
                        <form method="POST" action="{{ route('transaksi.update', $item->id) }}">
                            @csrf @method('PUT')
                            <button type="submit" class="bg-red-50 text-red-600 hover:bg-red-600 hover:text-white px-4 py-1.5 rounded-md text-sm font-bold transition border border-red-200">
                                Keluar
                            </button>
                        </form>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection