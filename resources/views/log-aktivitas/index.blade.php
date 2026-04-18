@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Log Aktivitas</h2>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #eee;">
                <th>No</th>
                <th>Waktu</th>
                <th>User</th>
                <th>Aktivitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->user->name ?? 'System' }}</td>
                <td>{{ $item->aktivitas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection