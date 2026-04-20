@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-extrabold text-slate-800">Data Master Kendaraan</h2>
    <a href="{{ route('kendaraan.create') }}" class="bg-slate-800 hover:bg-slate-900 text-white px-5 py-2.5 rounded-lg font-semibold transition shadow-md flex items-center">
        <span class="mr-2">+</span> Tambah Kendaraan
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 text-sm uppercase tracking-wider">
            <tr>
                <th class="px-6 py-4 font-medium">No</th>
                <th class="px-6 py-4 font-medium">Nomor Polisi</th>
                <th class="px-6 py-4 font-medium">Jenis</th>
                <th class="px-6 py-4 font-medium">Warna</th>
                <th class="px-6 py-4 font-medium text-right">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 text-slate-700">
            @foreach ($data as $item)
            <tr class="hover:bg-slate-50 transition">
                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 font-bold text-slate-800">{{ $item->no_polisi }}</td>
                <td class="px-6 py-4 capitalize">
                    <span class="bg-slate-100 text-slate-600 px-2 py-1 rounded text-xs font-bold">{{ $item->jenis }}</span>
                </td>
                <td class="px-6 py-4">{{ $item->warna }}</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('kendaraan.edit', $item->id) }}" class="bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white px-3 py-1.5 rounded text-sm font-semibold transition">Edit</a>
                        
                        <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-50 text-red-600 hover:bg-red-500 hover:text-white px-3 py-1.5 rounded text-sm font-semibold transition">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection