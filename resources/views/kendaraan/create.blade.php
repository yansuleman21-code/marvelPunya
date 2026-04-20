@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-8">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
        <div class="flex items-center mb-6 border-b pb-4">
            <a href="{{ route('kendaraan.index') }}" class="text-slate-400 hover:text-slate-600 mr-4 text-xl">&larr;</a>
            <h2 class="text-2xl font-bold text-slate-800">Tambah Kendaraan Baru</h2>
        </div>
        
        <form method="POST" action="{{ route('kendaraan.store') }}" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor Polisi</label>
                <input type="text" name="no_polisi" required placeholder="Contoh: DM 1234 XY" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition bg-slate-50 uppercase">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Jenis Kendaraan</label>
                <select name="jenis" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition bg-slate-50">
                    <option value="motor">Motor</option>
                    <option value="mobil">Mobil</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Warna</label>
                <input type="text" name="warna" required placeholder="Contoh: Hitam" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition bg-slate-50 capitalize">
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-slate-800 text-white font-bold py-3.5 rounded-lg hover:bg-slate-900 transition shadow-lg">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection