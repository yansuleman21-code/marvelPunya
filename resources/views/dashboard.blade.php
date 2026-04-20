@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h2 class="text-3xl font-extrabold text-slate-800">Dashboard</h2>
    <p class="text-slate-500 mt-1">Ringkasan sistem parkir Anda hari ini.</p>
</div>

<div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-2xl p-8 shadow-lg text-white flex items-center justify-between">
    <div>
        <h3 class="text-3xl font-bold mb-2">Selamat Datang, {{ auth()->user()->name ?? 'Admin' }}! 👋</h3>
        <p class="text-blue-100 text-lg">Anda memiliki akses penuh untuk mengelola kendaraan, tarif, dan transaksi area parkir.</p>
    </div>
    <div class="text-7xl opacity-80">
        🚗
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-center">
        <div class="bg-blue-100 p-4 rounded-lg text-blue-600 text-2xl mr-4">🧾</div>
        <div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Akses Cepat</p>
            <a href="/transaksi/create" class="text-lg font-bold text-slate-800 hover:text-blue-600">Catat Kendaraan Masuk &rarr;</a>
        </div>
    </div>
</div>
@endsection