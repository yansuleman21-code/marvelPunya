@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <nav class="flex mb-4 text-sm text-slate-500">
        <a href="/transaksi" class="hover:text-blue-600">Transaksi</a>
        <span class="mx-2">/</span>
        <span class="font-medium text-slate-800">Masuk</span>
    </nav>
    
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
        <h2 class="text-2xl font-bold mb-6">Catat Kendaraan Masuk</h2>
        
        <form method="POST" action="{{ route('transaksi.store') }}" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih No Polisi</label>
                <select name="kendaraan_id" class="w-full p-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition outline-none bg-slate-50">
                    @foreach($kendaraan as $k)
                    <option value="{{ $k->id }}">{{ $k->no_polisi }} ({{ $k->jenis }})</option>
                    @endforeach
                </select>
            </div>
            

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Area Parkir</label>
                    <select name="area_parkir_id" class="w-full p-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none bg-slate-50">
                        @foreach($area as $a)
                        <option value="{{ $a->id }}">{{ $a->nama_area }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tarif Berlaku</label>
                    <select name="tarif_id" class="w-full p-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none bg-slate-50">
                        @foreach($tarif as $t)
                        <option value="{{ $t->id }}">{{ strtoupper($t->jenis_kendaraan) }} - Rp {{ number_format($t->tarif_per_jam, 0) }}/jam</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-200 tracking-wide uppercase text-sm">
                    Konfirmasi Masuk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection