<a href="{{ route('area-parkir.create') }}">Tambah Area</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Area</th>
        <th>Kapasitas</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>

    @foreach ($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_area }}</td>
        <td>{{ $item->kapasitas }}</td>
        <td>{{ $item->lokasi }}</td>
        <td>
            <a href="{{ route('area-parkir.edit', $item->id) }}">Edit</a>

            <form action="{{ route('area-parkir.destroy', $item->id) }}" method="POST" style="display:inline">
                @csrf
                @method('delete')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>