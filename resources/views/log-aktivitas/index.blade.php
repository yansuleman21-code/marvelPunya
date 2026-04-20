@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Riwayat Log Aktivitas</h2>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 text-gray-600 text-sm uppercase tracking-wider">
                    <th class="py-3 px-4 border-b font-medium">No</th>
                    <th class="py-3 px-4 border-b font-medium">Waktu</th>
                    <th class="py-3 px-4 border-b font-medium">User</th>
                    <th class="py-3 px-4 border-b font-medium">Aktivitas</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($data as $item)
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="py-3 px-4 border-b">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4 border-b text-sm">{{ $item->created_at }}</td>
                    <td class="py-3 px-4 border-b font-semibold">{{ $item->user->name ?? 'System' }}</td>
                    <td class="py-3 px-4 border-b">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
                            {{ $item->aktivitas }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection